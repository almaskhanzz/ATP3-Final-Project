<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class SignInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signIn.index');
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
    public function store(Request $request)
    {
        //
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

    public function verify(Request $req)
	{
		$validatedData = $req->validate([
			'email' => 'required|max:50',
			'password' => 'required'
		]);

		$user = DB::table('signin')->where('email', $req->email)
					->where('password', $req->password)
					->first();
		// dd($user);
		if($user)
		{
			if($user->type == 1)
			{
				$req->session()->put('user', $user);
				$req->session()->put('logid', $user->id);
				return redirect()->route('admin.index');
            }
            else if($user->type == 3)
			{
				$req->session()->put('user', $user);
				$req->session()->put('logid', $user->id);
				return redirect()->route('staff.index');
            }
            else
            {
                return redirect()->route('signIn.index');
            }
		}
		else
		{
			$req->session()->flash('msg', 'invalid username/password');
			return redirect()->route('signIn.index');
		}
	}
}
