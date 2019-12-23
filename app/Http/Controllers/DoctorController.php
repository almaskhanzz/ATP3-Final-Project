<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Doctor;
use App\DoctorsDepartment;
use App\DoctorsSchedule;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctorsDepartment = DoctorsDepartment::all();
        return view('doctor.addDoctor')->with('department', $doctorsDepartment);
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
			'Name' => 'required|string',
			'birthday' => 'required',
			'gender' => 'required|in:Male,Female',
			'phoneNumber' => 'required|numeric|digits:10',
			'department' => 'required|string',
			'salary' => 'required|numeric',
			'profilePicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'email' => 'required|unique:signin,email|max:50|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
			'password' => 'required'
		]);

		$file = $req->file('profilePicture');
		$name =$file->getClientOriginalName();
		$destinationPath = 'uploads/doctors';
		$file->move($destinationPath,$name);
		$path = $destinationPath .'/'.$name;
        
        $doctor = new Doctor();
        $doctor->name = $req->Name;
        $doctor->dob = $req->birthday;
        $doctor->gender = $req->gender;
        $doctor->email = $req->email;
        $doctor->department = $req->department;
        $doctor->phone = $req->phnNo.$req->phoneNumber;
        $doctor->password = $req->password;
        $doctor->salary = $req->salary;
        $doctor->pic = $path;
        $doctor->status = 0;
    
        if($doctor->save()){
            if(DB::table('signin')->insert(
				['email' => $req->email, 'password' => $req->password, 'type' => 2]))
            {
                return redirect()->route('admin.addDoctorSchedule');
            }
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
        $doctor = Doctor::find($id);
        $doctorsSchedule = DoctorsSchedule::where('doctorName', $doctor->name)->first();
        $path = public_path() .'/' . $doctor->pic;
        if (file_exists($path)) {
            unlink($path);
            DB::table('signin')->where('email', $doctor->email)->delete();
            if($doctor->delete())
            {
                if($doctorsSchedule->delete())
                {
                    return redirect()->route('admin.doctorDeleteRequestList');
                }
            }
        }
    }

    // Doctor's List
    public function doctorList()
    {
        $doctors = Doctor::where('status',0)->get();
        return view('doctor.doctorList')->with('doctors', $doctors);
    }

    // Doctor's Department
    public function createDepartment()
    {
        return view('doctor.addDepartment');
    }

    public function storeDepartment(Request $req)
    {
        $validatedData = $req->validate([
			'department' => 'required|string|max:100'
		]);
        
        $doctorDepartment = new DoctorsDepartment();
        $doctorDepartment->department = $req->department;
    
        if($doctorDepartment->save()){
            return redirect()->route('admin.index');
        }
    }

    // Doctor's Schedule
    public function createDoctorSchedule()
    {
        $doctorsDepartment = Doctor::groupBy('department')->get('department');
        return view('doctor.addDoctorSchedule')->with('department', $doctorsDepartment);
    }
    function getDoctor(Request $request,$department)
    {
        $data = DB::table("doctors")->where('department', $department)->pluck("name");  
        return response()->json($data);
    }

    public function storeDoctorSchedule(Request $req)
    {
        $validatedData = $req->validate([
            'department' => 'required',
            'doctor' => 'required|unique:doctors_schedules,doctorName',
			'time1' => 'required',
            'room1' => 'required|max:10',
            'time2' => 'required',
            'room2' => 'required|max:10',
            'time3' => 'required',
			'room3' => 'required|max:10'
		]);
        
        $doctorsSchedule = new DoctorsSchedule();
        $doctorsSchedule->department = $req->department;
        $doctorsSchedule->doctorName = $req->doctor;
        $doctorsSchedule->time1 = $req->time1;
        $doctorsSchedule->room1 = $req->room1;
        $doctorsSchedule->time2 = $req->time2;
        $doctorsSchedule->room2 = $req->room2;
        $doctorsSchedule->time3 = $req->time3;
        $doctorsSchedule->room3 = $req->room3;
    
        if($doctorsSchedule->save()){
            return redirect()->route('admin.index');
        }
    }

    // Doctor's Profile -> Admin
    public function doctorProfile($id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.doctorProfile')->with('doctor', $doctor);
    }

    public function editdoctorProfile($id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.editdoctorProfile')->with('doctor', $doctor);
    }

    public function updatedoctorProfile($id, Request $req)
    {
        $validatedData = $req->validate([
			'salary' => 'required|max:10'
		]);
        $doctor = Doctor::find($id);
        $doctor->salary = $req->salary;
    
        if($doctor->save()){
            return redirect()->route('admin.doctorList');
        }
    }

    // Doctor's Schedule -> Admin
    public function doctorSchedule($name)
    {
        $doctorsSchedule = DoctorsSchedule::where('doctorName', $name)->first();
        return view('doctor.doctorSchedule')->with('doctorsSchedule', $doctorsSchedule);
    }

    // Delete Staff -> Admin
    public function doctorDeleteRequest($id)
    {
        $doctor = Doctor::find($id);
        $doctor->status = 1;
        if($doctor->save()){
            return redirect()->route('admin.doctorList');
        }
    }

    public function doctorDeleteRequestList()
    {
        $doctors = Doctor::where('status',1)->get();
        return view('doctor.doctorDeleteRequestList')->with('doctors', $doctors);
    }
}
