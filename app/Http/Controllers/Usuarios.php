<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Usuarios extends Controller{
	// Creates an user
		public function store(Request $request){
			// Validating form fields
				$validator = request()->validate([
			        'name' => 'required|unique:users|max:255',
			        'email' => 'required|unique:users',
					'image' => 'required|image|mimes:jpeg,png,jpg',
				]);

	  	    //	Validating success
		  	    if($validator){
		  	    	// Uploading image & getting its name to store in BD
			        $imageName = time().'.'.request()->image->getClientOriginalExtension();
			        request()->image->move(public_path('images'), $imageName);
			        // Storing user's data in BD
						DB::table('users')->insertGetId([
							'name'	=> $_POST['name'],
							'email'	=> $_POST['email'],
							'image'	=> $imageName
						]);
					// Returning success
		    			return view('usuarios.create', ['title' => 'Create User'])->with('message', 'Cadastro Efetuado!');
		    	}
	    }
	    public function list(){
   			$users = DB::select('select * from users');
        	return view('usuarios.list', ['title' => 'List Users', 'users' => $users]);	    	
	    }
}
