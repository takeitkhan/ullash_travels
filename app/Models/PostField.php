<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostField extends Model
{
    use HasFactory;

    protected $table = 'posts_field';
    protected $fillable = [
        'term_type',
        'term_taxonomy_type',
        'field_name',
        'field_type',
        'field_type_value',
        'field_key',
        'field_value',
        'join_table',
        'join_column',
        'note'
    ];

    public static function getCommaSeperatedValueByTermType($term_type_name, $field_name)
    {
        if (!empty($term_type_name) && !empty($field_name)) {
            $category = PostField::where('term_type', $term_type_name)->where('field_name', $field_name)->first();
            if ($category->field_type_value != NULL) {
                $checkorradio = explode(',', $category->field_type_value);
            } else {
                $checkorradio = 'No data found';
            }
            return $checkorradio;
        }
    }
}
