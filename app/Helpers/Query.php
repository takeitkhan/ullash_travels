<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use DB;
use App\Helpers\ButtonSet;
use App\Helpers\Query;
//use App\Http\Traits\GlobalTrait;
class Query {

    //use GlobalTrait;


    //Get Data
    public static function getData($table){
        return DB::table($table)->get();
    }

    //Delete Data
    public static function delete($route, $id, $arrEle = []){
        $default = [
            'title' => '',
            'class' => null,
            'id' => null,
        ];
        $merge = array_merge($default, $arrEle);
        $html = \Form::open(array('url' => route($route, $id), 'method' => 'DELETE', 'style' => ''));
        $html .= '<button onclick="DeleteconfirmAlertCustom(`'.$merge['id'].'`)"  title="'.$merge['title'].'" type="button" class="border-0">
        <span class="icon is-small is-red"><i class="fas fa-times"></i></span></button>';
        $html .= \Form::close();

        return $html;
    }

    /**
     * Access Any Model
     * From Models Directory
     */
    public static function accessModel($modelName){
        $modelPath = '\App\Models' . '\\' . $modelName;
        return $modelPath;
    }

    
    /**
     * getEnumValues
     * From DB Table
     * @param  mixed $table
     * @param  mixed $column
     * @return void
     */
    public static function getEnumValues($table, $column) {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
        preg_match('/^enum((.*))$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
          $v = trim( $value, "(')" );
          $enum[strtolower($v)] = $v;
        }
        return $enum;
    }

    
    /**
     * barcodeGenerator
     *
     * @param  mixed $string
     * @return void
     */
    public static function barcodeGenerator($string){
        $generator = new \Picqer\Barcode\BarcodeGeneratorHTML();
        //$img = move_uploaded_file(asset('public')."/barcode{$string}.jpg", $generator->getBarcode($string, $generator::TYPE_CODABAR));
        //return $img;
        return $generator->getBarcode($string, $generator::TYPE_CODE_128, 1, 30);
    }


}