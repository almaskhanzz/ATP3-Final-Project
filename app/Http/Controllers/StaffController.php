<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Staff;
use App\Photo;
use App\Doctor;
use App\User;
use App\StaffsSchedule;
use App\DoctorsSchedule;

class StaffController extends Controller
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
        $staff = $req->session()->get('user');
        $user = DB::table('staff')->where('email', $staff->email)->first();
        return view('staff.index')->with('user', $user)->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //staff change profile picture...
    public function changeProfilePicture(Request $req)
    {
        $staff = $req->session()->get('user');
        $user = DB::table('staff')->where('email', $staff->email)->first();
        return view('staff.changeProfilePicture')->with('staff', $user);
    }

    public function updateProfilePicture(Request $req)
    {
        $validatedData = $req->validate([
			'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);

        $staff = $req->session()->get('user');
        $user = DB::table('staff')->where('email', $staff->email)->first();

        $file = $req->file('picture');
		$name =$file->getClientOriginalName();
		$destinationPath = 'uploads';
		$file->move($destinationPath,$name);
        $path = $destinationPath .'/'.$name;
        

        if(DB::table('staff')->where('staffid', $user->staffid)
                            ->update(['pic' => $path]))
        {
            return redirect()->route('staff.profile');
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Staff Profile.....
    public function show(Request $req)
    {
        $staff = $req->session()->get('user');
        $user = DB::table('staff')->where('email', $staff->email)->first();
        return view('staff.profile')->with('staff', $user);
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
    //Staff ...Update Profile
    public function update(Request $req)
    {
        $validatedData = $req->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
			'email' => 'required|max:50|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/'
        ]);
        
        $staff = $req->session()->get('user');
        $user = DB::table('staff')->where('email', $staff->email)->first();
        if(DB::table('staff')->where('staffid', $user->staffid)
                             ->update(['firstname' => $req->firstName,'lastname' => $req->lastName, 'email' => $req->email]))
        {
            if(DB::table('signin')->where('id', $staff->id)
                                ->update(['email' => $req->email]))
            {
                return redirect()->route('staff.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Staff Change password......
    public function changePassword()
    {
        return view('staff.changePassword');
    }

    public function updatePassword(Request $req)
    {
        $validatedData = $req->validate([
			'oldPassword' => 'required|string',
			'newPassword' => 'required',
			'confirmPassword' => 'required|same:newPassword'
		]);

        $staff = $req->session()->get('user');
        $user = DB::table('staff')->where('email', $staff->email)->first();
        if(DB::table('signin')->where('id', $staff->id)
                            ->where('password', $req->oldPassword)->first())
        {
            if(DB::table('staff')->where('staffid', $user->staffid)
                            ->update(['password' => $req->newPassword]))
            {
                if(DB::table('signin')->where('id', $staff->id)
                                    ->update(['password' => $req->newPassword]))
                {
                    return redirect()->route('staff.index');
                }
            }
        }
        else
        {
            $req->session()->flash('msg', 'Old password was incorrect');
			return redirect()->route('staff.changePassword');
        }
    }
    //staff.... Doctor's List
    public function staff_doctorList()
    {
        $doctors = Doctor::where('status',0)->get();
        return view('doctor.staff_doctorList')->with('doctors', $doctors);
    }

    //staff... Doctor's Schedule
    public function doctorSchedule($name)
    {
        $doctors = DoctorsSchedule::where('doctorName',$name)->first();
        return view('doctor.staff_doctorSchedule')->with('doctorsSchedule', $doctors);
    }
    //staff...user List
    public function staff_userList()
    {
        $users = user::all();
        return view('user.staff_userList')->with('users', $users);
    }

    // staff....Staff's Schedule
    public function own_schedule($fname,$lname)
    {
        $name=$fname." ".$lname;
        $staffShedule = StaffsSchedule::where('staffsName', $name)->first();
        return view('staff.own_schedule')->with('staffShedule', $staffShedule);
    }
}
