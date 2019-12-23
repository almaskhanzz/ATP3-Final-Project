<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\DB;
use App\Photo;
use App\Doctor;
use App\Staff;
use App\user;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $photos = Photo::orderBy('id', 'desc')
               ->take(3)
               ->get();
        $id = $req->session()->get('logid');
        $getLog = DB::table('signin')->where('id', $id)
                                    ->first();
        $req->session()->put('user', $getLog);
        $admin = $req->session()->get('user');
        $user = DB::table('admin')->where('email', $admin->email)->first();

        $doctors = Doctor::count();
        $staffs = Staff::count();
        $users = user::count();
		return view('admin.index')->with('user', $user)->with('photos', $photos)->with('doctors', $doctors)->with('staffs', $staffs)->with('users', $users);
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
    public function show(Request $req)
    {
        $admin = $req->session()->get('user');
        $user = DB::table('admin')->where('email', $admin->email)->first();
        return view('admin.profile')->with('admin', $user);
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
    public function update(Request $req)
    {
        $validatedData = $req->validate([
			'name' => 'required|string',
			'email' => 'required|max:50|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/'
		]);

        $admin = $req->session()->get('user');
        $user = DB::table('admin')->where('email', $admin->email)->first();
        if(DB::table('admin')->where('id', $user->id)
                            ->update(['name' => $req->name, 'email' => $req->email]))
        {
            if(DB::table('signin')->where('id', $admin->id)
                                ->update(['email' => $req->email]))
            {
                return redirect()->route('admin.index');
            }
        }
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

    // Change Profile Picture
    public function changeProfilePicture(Request $req)
    {
        $admin = $req->session()->get('user');
        $user = DB::table('admin')->where('email', $admin->email)->first();
        return view('admin.changeProfilePicture')->with('admin', $user);
    }

    public function updateProfilePicture(Request $req)
    {
        $validatedData = $req->validate([
			'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);

        $admin = $req->session()->get('user');
        $user = DB::table('admin')->where('email', $admin->email)->first();

        $file = $req->file('picture');
		$name =$file->getClientOriginalName();
		$destinationPath = 'uploads';
		$file->move($destinationPath,$name);
        $path = $destinationPath .'/'.$name;
        

        if(DB::table('admin')->where('id', $user->id)
                            ->update(['pic' => $path]))
        {
            return redirect()->route('admin.profile');
        }
    }

    // Change Password
    public function changePassword()
    {
        return view('admin.changePassword');
    }

    public function updatePassword(Request $req)
    {
        $validatedData = $req->validate([
			'oldPassword' => 'required|string',
			'newPassword' => 'required',
			'confirmPassword' => 'required|same:newPassword'
		]);

        $admin = $req->session()->get('user');
        $user = DB::table('admin')->where('email', $admin->email)->first();
        if(DB::table('signin')->where('id', $admin->id)
                            ->where('password', $req->oldPassword)->first())
        {
            if(DB::table('admin')->where('id', $user->id)
                            ->update(['password' => $req->newPassword]))
            {
                if(DB::table('signin')->where('id', $admin->id)
                                    ->update(['password' => $req->newPassword]))
                {
                    return redirect()->route('admin.index');
                }
            }
        }
        else
        {
            $req->session()->flash('msg', 'Old password was incorrect');
			return redirect()->route('admin.changePassword');
        }
    }
}
