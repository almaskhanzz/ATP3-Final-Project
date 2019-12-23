@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    
    <h2 style="text-align:center">Doctor Profile Card</h2>

    <div class="card">
        <img src="\{{$doctor->pic}}" alt="John" style="width:100%">
        <h1>{{$doctor->name}}</h1>
        <h3>{{$doctor->department}}</h3>
        <p>{{$doctor->email}}</p>
        <p><a href="{{route('admin.editdoctorProfile', $doctor->doctorid)}}" class="pbtn">Manage</a></p>
        <p><a href="{{route('admin.doctorSchedule', $doctor->name)}}" class="pbtn">View Schedule</a></p>
    </div>

</div><br><br>
@endsection

@section('css')
<link rel="stylesheet" href="\CSS/profileCard.css">
@endsection

@section('title')
Doctor Profile
@endsection