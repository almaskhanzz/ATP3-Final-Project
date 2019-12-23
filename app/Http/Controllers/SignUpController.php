<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\facades\DB;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signUp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req->validate([
			'firstName' => 'required|string',
			'lastName' => 'required|string',
			'birthday' => 'required',
			'gender' => 'required|in:Male,Female',
			'phoneNumber' => 'required|numeric|digits:10',
			'city' => 'required|string',
			'location' => 'required|string',
			'profilePicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'email' => 'required|unique:signin,email|max:50|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
			'password' => 'required',
			'confirmPassword' => 'required|same:password'
		]);

		$file = $req->file('profilePicture');
		$name =$file->getClientOriginalName();
		$destinationPath = 'uploads/users';
		$file->move($destinationPath,$name);
		$path = $destinationPath .'/'.$name;

		$user = new user();
        $user->firstname = $req->firstName;
        $user->lastname = $req->lastName;
        $user->dob = $req->birthday;
        $user->gender = $req->gender;
        $user->email = $req->email;
		$user->phone = $req->phnNo.$req->phoneNumber;
		$user->city = $req->city;
        $user->location = $req->location;
        $user->password = $req->password;
        $user->picture = $path;
    
        if($user->save()){
			if(DB::table('signin')->insert(
				['email' => $req->email, 'password' => $req->password, 'type' => 4]
			)){
				return redirect()->route('signIn.index');
			}
            
        }else{
            return redirect()->route('signUp.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
