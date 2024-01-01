<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Term;
use App\Models\Post;
use App\Models\PostMeta;
use App\Models\Category;
use App\Helpers\Core;
use View;
use App\Models\PostCustomField;

class PostController extends Controller
{
    protected $getTermSlug;
    protected $getTermName;
    protected $getCatId;
    protected $getCatName;

    public function __construct(Request $request)
    {
        $checkTerm = Term::where('slug', $request->type)->first();
        $this->getTermSlug = $checkTerm['slug'];
        $this->getTermName = $checkTerm['name'];

        if ($request->categoryid) {
            $checkCat = Category::where('id', $request->categoryid)->first();
            $this->getCatId = $checkCat['id'];
            $this->getCatName = $checkCat['name'];
        }
    }

    //index
    public function index()
    {
        $term_name = $this->getTermName;
        $term_slug = $this->getTermSlug;
        $cat_id = $this->getCatId;

        if (empty($term_slug)) {
            return view('admin.404', ['message' => 'Invalid Post Type']);
        }
        if (!empty($cat_id)) {
            $getPost = Post::postByMultiCatId($cat_id, $term_slug)->paginate('15');
            $catName = $this->getCatName;
        } else {
            $getPost = Post::where('term_type', $term_slug)->orderBy('order_by', 'ASC')->paginate('15');
            $catName = '';
        }
        return view('admin.common.post.index', compact('getPost', 'term_name', 'term_slug', 'catName'));
    }

    //form
    public function form(Request $request)
    {
        $term_name = $this->getTermName;
        $term_slug = $this->getTermSlug;

        if (empty($term_slug)) {
            return view('admin.404', ['message' => 'Invalid Post Type']);
        } else {

            if ($request->id) {
                $post = Post::find($request->id);
            } else {
                $post = '';
            }

            return view('admin.common.post.form', compact('term_slug', 'term_name', 'post'));
        }
    }

    //store
    public function store(Request $request)
    {
        //dd($request->all());
        //die();
        $checkSlugIsExisting = Post::where('slug', 'LIKE', '%' . $request->slug . '%')->get()->count();
        $generateSlug = $checkSlugIsExisting > 0 ? $request->slug . '-' . ($checkSlugIsExisting + 1) : $request->slug;
        $request->validate([
            'name' => 'required',
//            'slug' => 'required|unique:posts,slug',
            'slug' => 'required',
        ]);
        $term_name = $this->getTermName;
        $term_slug = $this->getTermSlug;

        if (empty($term_slug)) {
            return view('admin.404', ['message' => 'Invalid Post Type']);
        } else {
            $featured_image = $term_slug . 'img_id';
            $category = !empty($request->category_id) ? implode(",", $request->category_id) : '';
            $data = new Post();
            $data->term_type = $term_slug;
            $data->name = $request->name;
            $data->slug = $generateSlug;
            $data->description = $request->description;
            $data->featured_image = $request->$featured_image;
            $data->category_id = $category;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keyword = $request->meta_keyword;
            $data->meta_author = $request->meta_author;
            $data->template = $request->template;
            $data->sub_title = $request->sub_title;
            $data->order_by = $request->order_by;
            $data->is_status = $request->is_status;
            $data->author = auth()->user()->id;
            $data->save();

            //Custom Field

            if (!empty($request->custom_field)) {

                foreach ($request->custom_field as $key => $custom) {
                    //dump($custom['meta_name']);
                    $metaValue = is_array($custom['meta_value'] ?? null) ? implode('|', $custom['meta_value']) ?? null : ($custom['meta_value'] ?? null);
                    $item = new PostMeta();
                    $item->post_id = $data->id;
                    $item->meta_name = $custom['meta_name'] ?? null;
                    $item->meta_value = $metaValue ?? null;
                    $item->save();

                }

            }
            return redirect()->route('admin_term_type_edit', [$term_slug, $data->id])->with('success', 'Added Successfully');
        }

    }

    // 'sub_title', 'post_order'

    //update
    public function update(Request $request)
    {
        $term_name = $this->getTermName;
        $term_slug = $this->getTermSlug;
        if (empty($term_slug)) {
            return view('admin.404', ['message' => 'Invalid Post Type']);
        } else {
            $featured_image = $term_slug . 'img_id';
            $category = !empty($request->category_id) ? implode(",", $request->category_id) : '';
            $data = Post::find($request->id);

            if ($data->slug == $request->slug) {
                $generateSlug = $request->slug;
            } else {
                $checkSlugIsExisting = Post::where('slug', 'LIKE', '%' . $request->slug . '%')->get()->count();
                $generateSlug = $checkSlugIsExisting > 0 ? $request->slug . '-' . ($checkSlugIsExisting + 1) : $request->slug;
            }

            $data->term_type = $term_slug;
            $data->name = $request->name;
            $data->slug = $generateSlug;
            $data->description = $request->description;
            $data->featured_image = $request->$featured_image;
            $data->category_id = $category;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keyword = $request->meta_keyword;
            $data->meta_author = $request->meta_author;
            $data->template = $request->template;
            $data->sub_title = $request->sub_title;
            $data->order_by = $request->order_by;
            $data->is_status = $request->is_status;
            $data->save();


            if (!empty($request->custom_field)) {
                foreach ($request->custom_field as $key => $custom) {
                    $metaValue = is_array($custom['meta_value'] ?? null) ? implode('|', $custom['meta_value']) ?? null : $custom['meta_value'] ?? null;
                    $items = PostMeta::where('meta_name', $custom['meta_name'])->where('post_id', $request->id)->first();
                    if (empty($items)) {
                        $items = new PostMeta();
                    }
                    $item = $items;
                    $item->post_id = $request->id;
                    $item->meta_name = $custom['meta_name'];
                    $item->meta_value = $metaValue ?? Null;
                    $item->save();
                    //dump($item);

                }

            }

            return redirect()->back()->with('success', 'Edited Successfully');
        }
    }

    //delete
    public function destroy(Request $request)
    {
        $data = Post::find($request->id);
        $data->delete();
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }

    //custom field
    public function customFieldDataStore(Request $request)
    {
        //dd($request->all());
        $term_slug = $this->getTermSlug;
        Core::customFieldFileLoad($term_slug, $request->custom_field_file);
        return redirect()->back()->with('success', 'Updated Successfully');
    }
}
