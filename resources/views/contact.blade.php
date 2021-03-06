@extends('master')
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 600px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 26rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                Contact us
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h1> Contact us</h1>
        </div>
    </div>  
</header>

<section class="contact img">
    <div class="container">
        <div class="contacting flex-container d-flex">
            <div class="bg-contact">
                <div class="bg-opacity flex-item-left">
                    {{-- <div class="text "> --}}
                        <h3> ​Need Help? </h3>
                        <p> ​Our specialists will contact you for details and clarification.
                            We’ll be glad to help you find the course. </p>
                        <ul>
                            <li> <i class="fab fa-facebook-f"></i> </li>
                            <li> <i class="fab fa-twitter"></i> </li>
                            <li> <i class="fab fa-instagram"></i> </li>
                        </ul>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="send flex-item-right pl-md-5 py-5">
                <form action="" method="post">
                    <div class="same-col">
                        <div class="form-group">
                            <p for="name" class="label"> Name </p>
                            <input type="text" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <p for="phone" class="label"> Phone </p>
                            <input type="text" id="phone" name="phone" placeholder="Enter your phone">
                        </div>
                    </div>
                    <p for="email" class="label"> Email </p>
                    <input type="text" id="email" name="email" placeholder="Enter a valid email address">

                    <p for="subject" class="label"> Subject </p>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject">

                    <p for="message" class="label"> Message </p>
                    <input type="text" id="message" name="message" placeholder="Enter your message...">

                    <input type="submit" value="​Request Clarification">
                </form>
            </div>
        </div>
    </div>
   </section>
@endsection