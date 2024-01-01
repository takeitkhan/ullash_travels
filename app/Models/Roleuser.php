<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roleuser extends Model
{
    use HasFactory;
    protected $table = 'role_users';
    protected $fillable = [
        'role_id',
        'user_id',
    ];

    public function role(){
       return $this->hasOne('\App\Models\Role', 'id', 'role_id');
    }

    public function user(){
        return  $this->hasOne('\App\Models\User', 'id', 'user_id');
    }
}
