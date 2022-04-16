@extends('partials.navbar')

@section('content')
<style>
    img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
    .kontak {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        text-align: center;
    }
    li {
        list-style: none;
    }
    
</style>
<div class="kontak">
    <div class="container ">
        <div class="row">
        <div class="col mt-5 ">
            <img src="/assets/dude.jpeg" alt="">
            <h2>Christofer Laurent</h2>
            <li><h7>ChristoferLaurent@gmail.com</h7></li>
            <li><h7>linkedin/ChristoferLaurent</h7></li>
            <li><h7>github/ChristoferLaurent</h7></li>
        </div>
        <div class="col mt-5">
            <img src="/assets/dadang.jpg" alt="">
            <h2>Farras Aditya</h2>
            <li><h7>FarrasAditya@gmail.com</h7></li>
            <li><h7>linkedin/FarrasAditya</h7></li>
            <li><h7>github/FarrasAditya</h7></li>
        </div>
    </div>
    <div class="row">
        <div class="col mt-5">
            <img src="/assets/fanji.jpg" alt="">
            <h2>Fanji Aburizal</h2>
            <li><h7>fanjiaburizal99@gmail.com</h7></li>
            <li><h7>linkedin/fanjiaburizal</h7></li>
            <li><h7>github/fanjiaburizal</h7></li>
        </div>
        <div class="col mt-5">
            <img src="/assets/poji.jpeg" alt="">
            <h2>Fauzi Hazim Wibowo</h2>
            <li><h7>FauziHazim@gmail.com</h7></li>
            <li><h7>linkedin/FauziHazim</h7></li>
            <li><h7>github/FauziHazim</h7></li>
        </div>
    </div>
    </div>
</div>

@endsection