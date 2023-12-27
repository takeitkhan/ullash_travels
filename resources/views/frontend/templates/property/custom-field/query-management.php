<?php
//dd(request()->all());
$post_id = request()->id;
$field_file = 'field-management';

use \App\Models\PostCustomField;

$check = PostCustomField::where('post_id', $post_id)->where('field_file', $field_file)->where('field_for', 'Post')->first();
if (!empty($check)) {
    $data = PostCustomField::find($check->id);
} else {
    $data = new PostCustomField();
}
$data->post_id = $post_id;
$data->field_file = $field_file;
$data->field_value = json_encode(request()->property_manage);
$data->field_for = 'Post';
$data->save();
