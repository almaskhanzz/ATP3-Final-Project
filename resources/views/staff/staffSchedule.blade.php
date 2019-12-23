@extends('layout.adminSecondaryPage')   

<!-- Content -->
@section('Content') 
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">{{$staffShedule->staffsName}} Schedule</span>
    </div>
    
    <form class="w3-container" method="post">
    {{csrf_field()}}
        <div class="w3-section">
            <label>Name</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="name" value="{{$staffShedule->staffsName}}" readonly>
        </div>
        <div class="w3-section">
            <label>Slot</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="time" value="{{$staffShedule->time}}" readonly>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room" value="{{$staffShedule->room}}" readonly>
        </div>
    </form>

</div><br><br>
@endsection


@section('title')
Staff's Schedule
@endsection

