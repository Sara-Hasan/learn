@extends('master')
@section('content')
<header>
    <div class="header">
        <div class="head">
            <h1> ​Education and Online Course Site </h1>
            <h5> ​Our c​ourses </h5>
            <div class="buttons">
                <div class="button"> <a href="#" > Course </a> </div>
                <div class="button"> <a href="#" > Course </a> </div>
                <div class="button"> <a href="#" > Course </a> </div>
                <div class="button"> <a href="#" > Course </a> </div>
            </div>
        </div>
    </div>  
</header>
<section class="pick-course">
    <div class="container">
        <h4> ​START LEARNING TODAY </h4>
        <h1> Pick Your Course </h1>
        <div class="courses">
            <div class="course">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
            <div class="course">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
            <div class="course">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
            <div class="course">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
        </div>
    </div>
</section>
<header class="info">
    <div class="info-bg">
        <div class="container">
            <div class="row">
                <div class="in"> 
                    <div class="col">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="in"> 
                    <div class="col">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="in"> 
                    <div class="col">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="in"> 
                    <div class="col">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</header>
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col">
               {{-- <img src="../img/tg-min.jpg" alt="" style="width: 20em; height: 28em;">  --}}
               <div class="image" style="background-image: url('../img/tg-min.jpg');"></div>
            </div>
            <div class="col">
               <div class="image" style="background-image: url('../img/dddhre-min.jpg');"></div>
             </div>
             <div class="col">
               <div class="image" style="background-image: url('../img/rtt.jpg');"></div>
             </div>
        </div>
        <div class="row-sec">
            <div class="col-sec">
                <div> <i class="far fa-lightbulb"></i> </div>
                <h5> ​How We Teach </h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur</p>   
                <span> <a href="#"> More </a> </span>         
            </div>
            <div class="col-sec">
                <div><i class="fas fa-medal"></i></div>
                <h5> Results </h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur</p>   
                <span> <a href="#"> More </a> </span>                      
            </div>
             <div class="col-sec">
                <div><i class="fas fa-question-circle"></i></div>
                <h5> Support </h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur</p>   
                <span> <a href="#"> More </a> </span>                       
            </div>
        </div>
        
    </div>
</section>
@endsection