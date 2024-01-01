<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendSettings extends Model
{
    use HasFactory;

    protected $table = "frontend_settings";
    protected $fillable = [
        'meta_title',
        'meta_name',
        'meta_value',
        'meta_type',
        'meta_group',
        'meta_order',
        'meta_placeholder',
        'meta_description'
    ];

    public static function frontSetting($arg)
    {
        if (!empty($arg)) {
            $get = FrontendSettings::where('meta_name', $arg)->first();
            if ($get) {
                return $get->meta_value;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
