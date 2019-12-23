@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    
    <h2 style="text-align:center">Staff Profile Card</h2>

    <div class="card">
        <img src="\{{$staff->pic}}" alt="John" style="width:100%">
        <h1>{{$staff->firstname}} {{$staff->lastname}}</h1>
        <p>{{$staff->email}}</p>
        <p><a href="{{route('admin.editStaffProfile', $staff->staffid)}}" class="pbtn">Manage</a></p>
        <p><a href="{{route('admin.staffSchedule', [$staff->firstname, $staff->lastname])}}" class="pbtn">View Schedule</a></p>
    </div>

</div><br><br>
@endsection

@section('css')
<link rel="stylesheet" href="\CSS/profileCard.css">
@endsection

@section('title')
Staff Profile
@endsection