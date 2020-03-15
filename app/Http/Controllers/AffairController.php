<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affair;
use App\User;

class AffairController extends Controller
{

    public function index() {    	 
    	return view('home',[
	    	'affair'=>Affair::all(),
	    	'users'=>User::all()
    	]);
    }

    public function create(Request $request) {
		Affair::create([
			"user_id" => $request->userID,
			"name" => $request->name,
			"status" => $request->status,

		]);
		
		return back();    	
    }

    public function update(Request $request) {
		$affair = Affair::find($request->id);
		$affair->status = $request->choose;
		$affair->save();
		return back();    	
    }

    public function destroy(Request $request) {
    	Affair::destroy($request->delete);
		return back();	
    }    
   
}
