@extends('layouts.app')
@section('content')

    <div class=".container-fluid w-100 bg-primary h-25 p-0 ">
        <h3 class="text-center text-white">hello ritik ji </h3>
    </div>
    <div class="container d-flex h-50  flex-column ">
        <img src="{{ asset('/assets/img/couress.png') }}" alt="coures details" class="h-25 w-75" width="400px" height="200px" style="margin: auto">
        <button class="btn btn-primary w-75" style="margin: auto">BUY NOW</button>
    </div>
    <div class="container">
        <h3>Description</h3>

        <p> Go from 0 to 100 with Harkirat Singh Live. Learn basics to advanced MERN, Basics to advanced Devops, System design and build 3 projects through this journey   </p>
        <h3>Career</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, doloremque aliquid? Culpa facilis vel sed odio voluptate quaerat excepturi non animi iure su</p>
        <h3>Scope</h3>
        <ul>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
        </ul>
        <h3>Faculty Name</h3>
        <p>Lorem, ipsum.</p>
    </div>
@endsection
