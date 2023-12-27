<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'parent_id',
        'taxonomy_type',
        'is_status'
    ];

    public function custom_field()
    {
        return $this->hasMany('\App\Models\PostMeta', 'category_id', 'id');
    }

    public static function getCatByid($id)
    {
        return Category::where('id', $id)->first() ?? null;
    }

    public static function getCatByMultiid($ids, $attr = 'name')
    {
        $exlplode = explode(',', $ids);
        $arr = [];
        foreach ($exlplode as $id) {

            if($attr) {
                $arr [] = Category::orderBy('id', 'desc')->whereRaw("FIND_IN_SET($id, id)")->first()->$attr ?? null;
            }else {
                $arr [] = Category::orderBy('id', 'desc')->whereRaw("FIND_IN_SET($id, id)")->first();
            }
        }
        if(!$attr){
            return $arr;
        }
        return implode(' , ', $arr);
    }

    public static function taxonomy($taxonomy_type)
    {
        return Category::where('taxonomy_type', $taxonomy_type)->where('is_status', 'publish')->get();
    }

    public static function name($id)
    {
        return Category::where('id', $id)->first()->name ?? null;
    }

    public static function nameUseSlug($slug)
    {
        return Category::where('slug', $slug)->first()->name ?? null;
    }

    public static function getSubCatByid($id)
    {
        return Category::where('parent_id', $id)->where('is_status', 'publish')->get() ?? [];
    }

    public static function getData($taxonomy_type)
    {
        $datas = Category::where('taxonomy_type', $taxonomy_type)->where('is_status', 'publish')->get();
        $items = [];
        foreach ($datas->toArray() as $key => $data) {
            $getField = PostMeta::where('category_id', $data['id'])->get();
            $fields = [];
            foreach ($getField as $field) {
                $fields [$field->meta_name] = $field->meta_value;
            }
            $items [] = array_merge($data, $fields);
        }

//        return $collection;
        return (object)$items;
    }
}
