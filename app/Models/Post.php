<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PostMeta;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'featured_image',
        'term_type',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'meta_author',
        'template',
      	'sub_title',
      	'order_by',
      	'is_status',
        'author'
    ];

    public function post_metas(){
        return $this->hasMany('\App\Models\PostMeta', 'post_id', 'id');
    }

    //get Post By Category
    public static function category($category_id, array $option = []){
        $default = [
            'paginate' => null,
          	'orderBy'  => 'DESC',
          	'orderAs' => 'id'
        ];
        $data = (object)array_merge($default, $option);

        if(!empty($category_id)){
            if($data->paginate != null){
                return Post::orderBy($data->orderAs, $data->orderBy)->whereRaw("FIND_IN_SET($category_id, category_id)")->paginate ($data->paginate);
            }else {
                return Post::orderBy($data->orderAs, $data->orderBy)->whereRaw("FIND_IN_SET($category_id, category_id)")->get();
            }
        }
    }

    public static function term($term_type, array $option = []){
        $default = [
            'paginate' => null,
            'query' => false,
        ];
        $data = (object)array_merge($default, $option);
        $post = Post::orderBy('order_by', 'ASC')->where('term_type', $term_type)->where('is_status', 'publish');
        if(!empty($term_type) && $data->paginate != null){
            return $post->paginate($data->paginate);
        } elseif(!empty($term_type) && $data->query == true){
            return $post;
        }else {
            return $post->get();
        }


    }

    public static function getPostByCat($category_id){
        $getPost = Post::where('category_id', $category_id)->orderBy('id', 'DESC')->get();
        return $getPost;
    }
    public static function postByMultiCatId($category_id, $term_slug, $optional_order = false){

      	if(!empty($optional_order) && $optional_order = true) {
          if(!empty($category_id)){
              return Post::orderBy('post_order', 'ASC')->where('is_status', 'publish')->whereRaw("FIND_IN_SET($category_id, category_id)")->where('term_type', $term_slug);
          }
        } else {
          if(!empty($category_id)){
              return Post::orderBy('id', 'DESC')->where('is_status', 'publish')->whereRaw("FIND_IN_SET($category_id, category_id)")->where('term_type', $term_slug);
          }
        }

    }

    //Count
    public static function countPostByMultiCatId($category_id, $term_slug) {
        //dd($category_id);
        if(!empty($category_id)){
            return count(Post::whereRaw("FIND_IN_SET($category_id, category_id)")->where('term_type', $term_slug)->get());
        }
    }


  //Custom Field
  public static function customField($meta_name, $post_id){
    	$data = PostMeta::where('meta_name', $meta_name)->where('post_id', $post_id)->first();
    	if(!empty($data)){
          	return $data->meta_value;
        } else {
          return null;
        }

  }


}
