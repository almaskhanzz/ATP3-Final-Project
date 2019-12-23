@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Services List</span>
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" id="myInput" class="w3-input w3-border w3-hover-border-black" onkeyup="myFunction()" placeholder="Search by Name.."><br><br>
        <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>Name</th>
                    <th id='border'>Price</td>
                    <th id='border'>Description</th>
                    <th id='border'>Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($services as $s)
                    <tr id='border'>
                        
                        <td id='border'>{{$s->name}}</td>
                        <td id='border'>{{$s->price}}</td>
                        <td id='border'>{{$s->description}}</td>
                        <td id='border'>
                            <a href="{{route('staff.destroyServices', $s->sid)}}" class="delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>

</div><br><br>
@endsection

@section('Search')
<script type="text/javascript" src="\js/search1.js"></script>
@endsection

@section('title')
Services List
@endsection
