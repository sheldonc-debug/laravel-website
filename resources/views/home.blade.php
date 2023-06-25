<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        @media(min-width: 768px){
            .news-input{
                width:50%;
            }
        }

       </style> 
</head>

<body>
<!--navbar-->  
<nav class="navbar navbar-expand-lg bg-dark navbar-dark pt-3">
    <div class="container">
        <a href="" class="navbar-brand"> IETI Marikina</a>


    <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="#about" class="nav-link"> About Us </a>
            </li>
            <li class="nav-item">
                <a href="#courses" class="nav-link"> Courses </a>
            </li>
            <li class="nav-item">
                <a href="#instructor" class="nav-link"> Instructor </a>
            </li>
        </ul>
</div>
</div>
</nav>
<!--showcase-->
<section class="bg-dark text text-light p-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between"> 
            <div>
                <h1>Enroll now at <span class="text-warning">IETI Marikina</span></h1>
        <p class="lead my-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eius laudantium assumenda corrupti ipsam id accusantium.
        </p> 
        <button class="btn btn-primary btn-lg">Enroll Now </button>   
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="{{URL('img/kidscom.png')}}">
        </div>
    </div>  
</section>

<!--newsletter-->
<section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-1">Signup to get 80% Discount</h3>

            <div class="input-group news-input">
                <input type="text" class="form-control" placeholder="Enter email address">
<button class="btn btn-dark btn-lg" type="button">Submit</button>
</div>
</div>
</div>
</section> 


<!--Courses-->
<section class= "p-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">

            <div class="card bg-dark text-light">
            <div class="card body text-center">
            <div class="h1 mb-3">
            <i class="bi bi-laptop"></i>          
</div>
<h3 class="card-title mb-3">
    BSIT
</h3>
<p class="card-text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ad aut doloribus, optio distinctio aliquid deleniti ab itaque atque facilis?
</p>
<a= href="#" class="btn btn-primary">Read More</a>


</div>
</div>
</div>
<div class="col-md">

            <div class="card bg-dark text-light">
            <div class="card body text-center">
            <div class="h1 mb-3">
            <i class="bi bi-laptop"></i>          
</div>
<h3 class="card-title mb-3">
    BSIT
</h3>
<p class="card-text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ad aut doloribus, optio distinctio aliquid deleniti ab itaque atque facilis?
</p>
<a= href="#" class="btn btn-primary">Read More</a>
</div>
</div>
    </div>
<div class="col-md">

            <div class="card bg-dark text-light">
            <div class="card body text-center">
            <div class="h1 mb-3">
            <i class="bi bi-laptop"></i>          
</div>
<h3 class="card-title mb-3">
    BSIT
</h3>
<p class="card-text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ad aut doloribus, optio distinctio aliquid deleniti ab itaque atque facilis?
</p>
<a= href="#" class="btn btn-primary">Read More</a>
    </div>
    </div>
    </div>
</section>


<!--Learn Sections-->
<section id="about" class="p-5">
    <div class="container">
        <div class ="row align-items-center">
            <div class="col-md">
                <img src="{{URL('img\webdev.jpg')}}" class="img-fluid">
    </div>
    <div class="col-md p-5">
        <h2> Learn Web Application Development</h2>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ratione iusto sed ipsam corrupti quod eligendi distinctio incidunt, atque est.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi itaque, culpa nam qui facere fugit porro. Vel deserunt facilis, delectus, fuga laudantium doloribus dolores consequatur nihil maxime et deleniti?
        </p>
        <a href="" class="btn btn-light mt-3">
            <i class="bi bi-chevron-right"></i> Read More
        </a>    
    </div>
    </div>
    </div>
  </section>
  <section id="about" class="p-5 bg-dark text text-light  ">
    <div class="container">
        <div class ="row align-items-center ">
            <div class="col-md">
            <h2> Learn Front-End Development</h2>
            <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ratione iusto sed ipsam corrupti quod eligendi distinctio incidunt, atque est.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi itaque, culpa nam qui facere fugit porro. Vel deserunt facilis, delectus, fuga laudantium doloribus dolores consequatur nihil maxime et deleniti?
        </p>
        <a href="" class="btn btn-light mt-3">
            <i class="bi bi-chevron-right"></i> Read More
        </a>    
    </div>
    <div class="col-md p-5">
    <img src="{{URL('img\frontend.png')}}" class="img-fluid">   
    </div>
    </div>
    </div>
  </section>

  <!--Questions Accordion-->
  <section id="questions" class="p-5">
    <div class="container">
        <h2 class="text-center mb-4"> Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                    class="accordion-button collapseed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-one"
                    >
                    Where exactly are you located?
                  </button>
    </h2>
    <div
      id="question-one"
      class="accordion-collapse collapse"
      data-bs-parent="#questions"
      >
      <div class="accordion-body">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem et quidem
         mollitia, harum natus explicabo nulla reiciendis minima eum eius est esse
          illum modi aspernatur deserunt voluptates voluptas officia quis eaque blanditiis 
          earum molestias enim repudiandae. Dolorum illum accusamus veritatis!
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
 
    <!--Instructors-->
    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Instructors</h2>
            <p class="lead text-center text-white mb-5">
                Our instructors all have 5+ years working as a web developer in the industry
    </p>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <img
                    src="https://randomuser.me/api/portraits/men/11.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                    />
    <h3 class="card-title mb-3"> John Doe </h3>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Iure deleniti labore saepe doloremque obcaecati, nobis quibusdam accusantium provident inventore excepturi.
    </p>
    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
    </div>  
    </div>  
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="card bg-light">
    <div class="card-body text-center">
    <img
                    src="https://randomuser.me/api/portraits/men/66.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                    />
    <h3 class="card-title mb-3"> John Doe </h3>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Iure deleniti labore saepe doloremque obcaecati, nobis quibusdam accusantium provident inventore excepturi.
    </p>
    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="card bg-light">
    <div class="card-body text-center">
    <img
                    src="https://randomuser.me/api/portraits/men/63.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                    />
    <h3 class="card-title mb-3"> John Doe </h3>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Iure deleniti labore saepe doloremque obcaecati, nobis quibusdam accusantium provident inventore excepturi.
    </p>
    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="card bg-light">
    <div class="card-body text-center">
    <img
                    src="https://randomuser.me/api/portraits/men/19.jpg"
                    class="rounded-circle mb-3"
                    alt=""
                    />
    <h3 class="card-title mb-3"> John Doe </h3>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Iure deleniti labore saepe doloremque obcaecati, nobis quibusdam accusantium provident inventore excepturi.
    </p>
    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <!-- Contact and Map-->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4"> Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> 50 Main St. Boston MA
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enrollment Phone:</span> (555) 555-5555
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Student Phone:</span> (333) 333-3333
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enrollment Email:</span> (555) enroll@fronendbc.test 
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Student Email:</span> student@fronendbc.test
                    </li>
    </ul>
    </div>
    <div class="col-md">
        <div id="map"></div>
    </div>
    </div>
    </div>
    </section>

    <!--Modal-->
    <div 
    class="modal fade"
    id="enroll"
    tabindex="-1"
    aria-labelledyby="enrollLabel"
    aria-hidden="true"
    >
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel"> Enrollment </h5>
            <button
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
            ></button>
    </div>
    <div class="modal-body">
        <p class="lead"> Fill out this form and we will get back to you</p>
    </form>
    <div class="mb-3">
        <label for="first-name" class="col-form-label">
            First Name:
        </label>
        <input type="text" class="form-control" id="first-name" />
    </div>
    <div class="mb-3">
    <label  for="last-name" class="col-form=label"> Last Name: </label>
    <input type="text" class="form-control" id="last-name" />
    </div>
    <div class="mb-3">
        <label for="email" class="col-form-label">
            Email:
        </label>
        <input type="email" class="form-control" id="email" />
    </div>
    <div class="mb-3">
        <label for="phone" class="col-form-label">
            First Name:
        </label>
        <input type="tel" class="form-control" id="phone" />
    </div>
    </form>
    </div>
    <div class="modal-footer">
    <button
            type="button"
            class="btn btn-secondary"
            aria-label="modal"
            >Close</button>
            <button type="button" class="btn btn-primary"> Submit </button>
    </div>
    </div>
    </div>
    </div>
</div>
<script>
        mapboxgl.accessToken =
        'pk.eyJ1IjoiZGlnaXRhbGtpIiwiYSI6ImNqNXh1MDdibTA4bTMycnAweDBxYXBpYncifQ.daSatfva2eG-95QHWC9Mig'
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v9',
            center: [-78.3816748, -0.3498079],
            zoom: 14,
            pitch:45
            bearing:-17.6
            hash:true
        })
        </script>

        <div class="text-center">
    <button
            class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#enroll"
            >Start the Enrollment</button>
    </div>
</body>
</html>