<?php 
/**
 * Here All Website Front Setings method
 */
namespace App\Helpers;

use App\Models\FrontendSettings;

use App\Models\Media;

use App\Models\Post;

use App\Models\Category;

class WebsiteSettings {
    
    public static function settings($arg){
        return FrontendSettings::frontSetting($arg);
    }

    /** 
     * String To Array Convert  
     * Saved Array To Sql
     * Like That => ['', '']
    */

    public static function strToArr($arr){
        if(is_array($arr)){
            return $arr;
        }else{
            $strRep = str_replace(['[','"','"',']'], ['','',',',''] ,"$arr");
            return explode(',', $strRep); //Make Array
        }
        
    }

    /**
     * get Any image by id
     */
    public static function media($id){
        return Media::fileLocation($id);
    }

    /**
     * Website Logo
     * We are getting value as Media ID From DB
     */
    public static function siteLogo(){
        $logo = Self::settings('site_logoimg_id');
        return Media::fileLocation($logo);
    }

    /**
     * Home Slider 
     * We are getting value as Category ID From DB
     */
    public static function homeSlider(){
        $slider = Self::settings('home_slider');
        //return Post::getPostByCat($slider);
      return Post::postByMultiCatId($slider, 'slider', true)->get();
    }

    /**
     * Home Our Service Slider 
     * We are getting value as Category ID From DB
     */
    public static function homeOurService($catname = null){
        $service = Self::settings('home_our_service');

        if($catname == 'catname') {
            return Category::getCatByid($service); 
        } else{
            return Post::getPostByCat($service);
        }  
    }

}

?>