@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Staff List</span>
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" id="myInput" class="w3-input w3-border w3-hover-border-black" onkeyup="myFunction()" placeholder="Search by Name.."><br><br>
        <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>Profile Picture</th>
                    <th id='border'>Name</td>
                    <th id='border'>Date of birth</th>
                    <th id='border'>Gender</th>
                    <th id='border'>Email</th>
                    <th id='border'>Cell</th>
                    <th id='border'>Salary</th>
                    <th id='border'>Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($staffs as $s)
                    <tr id='border'>
                        <td id='border'>
                            <img src="\{{$s->pic}}" height="42" width="42">
                        </td>
                        <td id='border'>{{$s->firstname}} {{$s->lastname}}</td>
                        <td id='border'>{{$s->dob}}</td>
                        <td id='border'>{{$s->gender}}</td>
                        <td id='border'>{{$s->email}}</td>
                        <td id='border'>{{$s->phone}}</td>
                        <td id='border'>{{$s->salary}}</td>
                        <td id='border'>
                            <a href="{{route('admin.staffProfile', $s->staffid)}}" class="btn">Profile</a>
                            <a href="{{route('admin.staffDeleteRequest', $s->staffid)}}" class="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>

</div><br><br>
@endsection

@section('Search')
<script type="text/javascript" src="\js/search.js"></script>
@endsection

@section('title')
Staff List
@endsection