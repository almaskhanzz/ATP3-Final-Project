@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Appoinment List</span>
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" id="myInput" class="w3-input w3-border w3-hover-border-black" onkeyup="myFunction()" placeholder="Search by Name.."><br><br>
        <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>Name</th>
                    <th id='border'>Date of birth</td>
                    <th id='border'>Services</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($appointments as $s)
                    <tr id='border'>
                        <td id='border'>{{$s->name}}</td>
                        <td id='border'>{{$s->dob}}</td>
                        <td id='border'>{{$s->services}}</td>
                        
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
Appoinment List
@endsection
