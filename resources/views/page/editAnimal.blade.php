@extends('template.main')
@section('content')


<div class="container d-flex justify-content-center mt-5">
    <form action="/update-animal/{{$edit->id}}" method="POST">
        @csrf
        
        <label for="">Genre</label>
        <input value="{{$edit->genre}}" name="genre" type="text">

        <label for="">Age</label>
        <input value="{{$edit->age}}" name="age" type="text">

        <button type="submit" class="btn btn-success">SUBMIT</button>
    </form>
</div>




    
@endsection