<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FrontendSettings;

class FrontendSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
               'meta_title' => 'Website Name',
               'meta_name'=>'site_name',
               'meta_value'=>'',
               'meta_type' => 'Text',
               'meta_group' => 'General'
            ],
            [
               'meta_title' => 'About website',
               'meta_name'=>'site_description',
               'meta_value'=>'',
               'meta_type' => 'Textarea',
               'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Favicon',
               'meta_name'=>'site_faviconimg_id',
               'meta_value'=>'',
               'meta_type' => 'Media',
               'meta_group' => 'General'
            ], 
            [
               'meta_title' => 'Logo',
               'meta_name'=>'site_logoimg_id',
               'meta_value'=>'',
               'meta_type' => 'Media',
               'meta_group' => 'Header Section'
            ],        
            [
               'meta_title' => 'Footer Content',
               'meta_name'=>'footer_content',
               'meta_value'=>'',
               'meta_type' => 'Richeditor',
               'meta_group' => 'Footer Section'
            ],
            [
               'meta_title' => 'Facebook',
               'meta_name'=>'facebook_url',
               'meta_value'=>'',
               'meta_type' => 'Text',
              'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Twitter',
               'meta_name'=>'twitter_url',
               'meta_value'=>'',
               'meta_type' => 'Text',
               'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Instragram',
               'meta_name'=>'instagram_url',
               'meta_value'=>'',
               'meta_type' => 'Text',
               'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Youtube',
               'meta_name'=>'youtube_url',
               'meta_value'=>'',
               'meta_type' => 'Text',
               'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Phone',
               'meta_name'=>'company_phone',
               'meta_value'=>'',
               'meta_type' => 'Text',
              'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Email',
               'meta_name'=>'company_email',
               'meta_value'=>'',
               'meta_type' => 'Text',
               'meta_group' => 'General'
            ],
            [
               'meta_title' => 'Homepage Slider',
               'meta_name'=>'home_slider',
               'meta_value'=>'',
               'meta_type' => 'Text',
               'meta_group' => 'Homepage'
            ],
            [
               'meta_title' => 'Our Service',
               'meta_name'=>'home_our_service',
               'meta_value'=>'',
               'meta_type' => 'Text',
                'meta_group' => 'Homepage'
            ],

            
        ];

        foreach ($settings as $key => $value) {
            FrontendSettings::create($value);
        }
    }
}
