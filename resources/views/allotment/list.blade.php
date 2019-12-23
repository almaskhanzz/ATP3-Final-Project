@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Allotment List</span>
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" id="myInput" class="w3-input w3-border w3-hover-border-black" onkeyup="myFunction()" placeholder="Search by Name.."><br><br>
        <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>Patient Name</th>
                    <th id='border'>Bed No</td>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($allotments as $s)
                    <tr id='border'>
                        <td id='border'>{{$s->patient_name}}</td>
                        <td id='border'>{{$s->bed_no}}</td>
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
Allotment List
@endsection
