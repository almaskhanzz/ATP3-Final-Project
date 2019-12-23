@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Photo gallery List</span>
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" id="myInput" class="w3-input w3-border w3-hover-border-black" onkeyup="myFunction()" placeholder="Search by title.." title="Type in a name"><br><br>
        <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>Picture</th>
                    <th id='border'>title</th>
                    <th id='border'>Description</th>
                    <th id='border'>Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($photos as $s)
                    <tr id='border'>
                        <td id='border'>
                            <img src="\{{$s->pic}}" height="42" width="42">
                        </td>
                        <td id='border'>{{$s->title}}</td>
                        <td id='border'>{{$s->description}}</td>
                        <td id='border'>
                            <a href="{{route('admin.photoGalleryDelete', $s->id)}}" class="delete">Delete</a>
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
Photo Gallery List
@endsection
