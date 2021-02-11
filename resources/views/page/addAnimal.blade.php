@extends('template.main')
@section('content')

    <div class="container d-flex justify-content-around mt-5">
        <form action="/store-animal" method="POST">
            @csrf
            
            <label for="">Genre</label>
            <input name="genre" type="text">
    
            <label for="">Age</label>
            <input name="age" type="text">
    
            <button type="submit" class="btn btn-success">SUBMIT</button>
        </form>
    </div>


    
@endsection