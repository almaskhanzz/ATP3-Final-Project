@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content">
    <div class="w3-container">
    <br>
    <table border="1" width="100%" id="myTable">
            <thead>
                <tr id='border1' class="header">
                    <th id='border'>From</th>
                    <th id='border'>To</td>
                    <th id='border'>Text</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($messages as $s)
                    <tr id='border'>
                        <td id='border'>{{$s->sender}}</td>
                        <td id='border'>{{$s->receiver}}</td>
                        <td id='border'>{{$s->text}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="w3-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <font color="red"><strong>Whoops!</strong> There were some problems with your input.</font><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li><font color="red">{{ $error }}</font></li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        
        <div class="w3-section">
            <label>From</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="from" value="{{$user->email}}" readonly>
        </div>
        <div class="w3-section">
            <label>To</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="to" placeholder="Recipients">
        </div>
        <div class="w3-section">
            <label>Text</label>
            <textarea rows="3" cols="60" type="text"  name="text" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter Something" ></textarea>
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Send" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Messages
@endsection