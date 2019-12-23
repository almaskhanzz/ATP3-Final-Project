@extends('layout.staffSecondaryPage')   

<!-- Content -->
@section('Content') 
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">{{$doctorsSchedule->doctorName}} Schedule</span>
    </div>
    
    <form class="w3-container" method="post">
    {{csrf_field()}}
        <div class="w3-section">
            <label>Name</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="name" value="{{$doctorsSchedule->doctorName}}" readonly>
        </div>
        <div class="w3-section">
            <label>Department</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="department" value="{{$doctorsSchedule->department}}" readonly>
        </div>
        <div class="w3-section">
            <label>Slot: 1</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="time" value="{{$doctorsSchedule->time1}}" readonly>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room" value="{{$doctorsSchedule->room1}}" readonly>
        </div>
        <div class="w3-section">
            <label>Slot: 2</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="time" value="{{$doctorsSchedule->time2}}" readonly>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room" value="{{$doctorsSchedule->room2}}" readonly>
        </div>
        <div class="w3-section">
            <label>Slot: 3</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="time" value="{{$doctorsSchedule->time3}}" readonly>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room" value="{{$doctorsSchedule->room3}}" readonly>
        </div>
    </form>

</div><br><br>
@endsection


@section('title')
Doctor's Schedule
@endsection

