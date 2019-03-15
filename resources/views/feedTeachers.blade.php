@extends('layouts') 
@section('content')
<div class="container">
    <br><br>
    <div class="center">
        <h1>Enter Teacher Details</h1>
    </div>
    <style>
        .center {
            float: center;
        }
    </style>

    <form method="POST" action="/">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Enter Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <label for="qualify">Enter your Qualifications  </label>
                <input type="text" name="qualify" class="form-control" placeholder=" Your Qualifications">
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <label for="experience">Enter your Experiences</label>
                <input type="text" name="experience" class="form-control" placeholder="Enter your Experiences">
            </div>
            <div class="col">
                <label for="study">Studied From</label>
                <input type="text" name="study" class="form-control" placeholder="Studied From">
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <label for="city">Enter Name of the City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter the city name">
            </div>
            <div class="col">
                <label for="village">Village Name</label>
                <input type="text" name="village" class="form-control" placeholder="Village Name">
            </div>
        </div><br>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="filename">
            <label class="custom-file-label" for="customFile">Upload Resume</label>
        </div>
        <button type="submit">Submit</button>

    </form>
</div>
@endsection