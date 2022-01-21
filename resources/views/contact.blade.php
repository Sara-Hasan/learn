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
            <div class="text flex-item-left">
                <h3> ​Need Help? </h3>
                <p> ​Our specialists will contact you for details and clarification.
                    We’ll be glad to help you find the course. </p>
                <ul>
                    <li> <i class="fab fa-facebook-f"></i> </li>
                    <li> <i class="fab fa-twitter"></i> </li>
                    <li> <i class="fab fa-instagram"></i> </li>
                </ul>
            </div>
            <div class="send flex-item-right pl-md-5 py-5">
                <form action="" method="post">
                    <div class="same-col">
                        <div class="form-group">
                            <p for="fname" class="label"> Name </p>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        </div>
                        <div class="form-group">
                            <p for="lname" class="label"> Phone </p>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        </div>

                    </div>
                    <p for="lname" class="label"> Email </p>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <p for="lname" class="label"> Subject </p>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <p for="lname" class="label"> Message </p>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <input type="submit" value="​Request Clarification">
                </form>
            </div>
        </div>
    </div>
   </section>
@endsection