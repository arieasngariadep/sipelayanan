<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function getListUsers(Request $request)
	{
        $listUser = DB::table('users')->get();

		$data = array(
			'listUser' => $listUser,
        ); 

		return view('Users.listUser', $data);
	}

}

?>