@extends('master')
@section('content')

<section class="login">
    <div class="container">
        <div class="logning flex-container d-flex">
            <div class="bg-contact">
                <div class="bg-opacity flex-item-left">
                    {{-- <div class="text "> --}}
                        <h3>​ Hello, Friends! </h3>
                        <p> ​Enter your personal details
                             and start journey with us </p>
                        <button>SIGN IN</button>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="send flex-item-right pl-md-5 py-5">
                <h1>SIGN UP</h1>
                <form action="" method="post">

                    <input type="text" id="name" name="name" placeholder="Enter your Name">

                    <input type="text" id="email" name="email" placeholder="Enter a valid email address">

                    <input type="password" id="password" name="password" placeholder="password">

                    <input type="text" id="phone" name="phone" placeholder="Enter your phone (e.g. +14155552675)">

                    <input type="submit" value="SIGN UP">
                </form>
            </div>
        </div>
    </div>
   </section>
@endsection