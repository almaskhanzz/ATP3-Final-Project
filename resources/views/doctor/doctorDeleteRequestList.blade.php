@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Doctor's Delete Request List</span>
    </div>
    
    <form class="w3-container" method="post">
    {{csrf_field()}}
        <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>Profile Picture</th>
                    <th id='border'>Name</td>
                    <th id='border'>Date of birth</th>
                    <th id='border'>Gender</th>
                    <th id='border'>Email</th>
                    <th id='border'>Department</th>
                    <th id='border'>Cell</th>
                    <th id='border'>Salary</th>
                    <th id='border'>Request</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($doctors as $s)
                    <tr id='border'>
                        <td id='border'>
                            <img src="\{{$s->pic}}" height="42" width="42">
                        </td>
                        <td id='border'>{{$s->name}}</td>
                        <td id='border'>{{$s->dob}}</td>
                        <td id='border'>{{$s->gender}}</td>
                        <td id='border'>{{$s->email}}</td>
                        <td id='border'>{{$s->department}}</td>
                        <td id='border'>{{$s->phone}}</td>
                        <td id='border'>{{$s->salary}}</td>
                        <td id='border'>
                            <a href="{{route('admin.destroyDoctor', $s->doctorid)}}" class="delete">Approve</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>

</div><br><br><br><br><br><br><br><br><br><br>
@endsection

@section('title')
Doctor's Delete Request List
@endsection