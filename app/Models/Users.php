<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    protected $table = 'users';
    protected $guarded = [];
    
    // public function getLoginUsers($NIP){
    //     $users = new Users();
    //     $data = $users->select('users.*')->where('users.NIP', $NIP)->first();
    //     return $data;
    // }

}


?>