<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>James Damilare || resume page</title>
</head>

<body id="home">

  <header class="bg-light sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand ml-5" href="#home"><strong>James Damilare</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#about">About</a>
          <a class="nav-item nav-link" href="#service">Service</a>
          <a class="nav-item nav-link" href="#skill">Skill</a>
          <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>

        </div>
      </div>
    </nav>
  </header>

  <!-- landing page -->
  <div class="container-fluid px-0 ">
    <div class="bg-light padding">
      <div class="container px-3">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <img class="img-fluid" src="{{asset('public/images/landing.svg')}}" alt="hello-image">
          </div>
          <div class="col-lg-6 p-5">
            <span class="greet mt-2">Hello!</span>
            <h2 class="mt-2">I am James Damilare</h2>
            <h5 class="text-capitalize mt-3 fw-normal">a backend web developer</h5>

            <!--  -->
            <div class="social-nav >
              <nav role=" navigation">
              <ul class="nav justify-content-left">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/Jayhmz" title="GitHub"><i class="fab fa-github"></i><span class="menu-title sr-only">GitHub</span></a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/james-damilare-75275a140/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>

              </ul>
              </nav>

              <div class="mt-3 p-3"><a class="btn btn-primary shadow-sm mt-1 " href="#contact">Get In Touch <i class="fas fa-arrow-right"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- about -->
  <div class="container-fluid py-5 pt-5" id="about">
    <div class="row">
      <div class="col-lg-6 padding">
        <div class="img-holder">
          <img class="img-fluid" src="{{asset('public/images/james.jpg')}}" alt="James Damilare">
        </div>
      </div>
      <div class="col-lg-6 padding">
        <h5 class="justify-content-left text-capitalize ">Hi I'm Ogunrinola James Damilare</h5>
        <p>An enthusiast backend developer proficient with the knowledge of mobile and web application development. I am passionate about building softwares that serves as a tangible solution to problems with the clear knowledge of object oriented programming and training in languages such as Java, PHP, and thier frameworks.Experience with mordern technologies and algorithm development is the stregth by which I bring software solutions to life. Ability to write clean code, learn and deliver within time frame makes me readily available whenever my services are needed.
        </p>

        <div class="details mt-5">
          <div class="mydetail">
            <label class="col-sm-2">Email:</label>
            <strong class="col-sm-10">Jayhmz10@gmail.com</strong>
          </div>
          <div class="mydetail">
            <label class="col-sm-2">Phone:</label>
            <strong class="col-sm-10">+2348132086252</strong>
          </div>
          <div class="mydetail">
            <label class="col-sm-2">Address</label>
            <strong class="col-sm-10">Akwa Ibom, Nigeria</strong>
          </div>
          <div class="mydetail">
            <label class="col-sm-2">Status</label>
            <strong class="col-sm-10">Available</strong>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- services -->
  <div class="container-fluid bg-wave py-5 pt-5" id="service">
    <div class="container">
      <div class="head text-center padding">
        <div class="title mb-5">
          <h3>Services</h3>
          <hr>
        </div>
        <div class="text-center">
          <p class="mx justify-content-center">My services are available for any kind of web or mobile application development, and I deliver to the best of my strenght, any given task.</p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-lg-3 padding">
            <div class="card">
              <div class="card-body padding">
                <img class="img-fluid" src="{{asset('public/images/webdev.png')}}" alt="web-design">
              </div>
              <div class="card-footer">
                <h6 class="text-capitalize text-center">web design & development</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 padding">
            <div class="card">
              <div class="card-body padding">
                <img class="img-fluid" src="{{asset('public/images/algorithm.png')}}" alt="algorithm-design">
              </div>
              <div class="card-footer">
                <h6 class="text-capitalize text-center">algorithm design</h6>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 padding">
            <div class="card">
              <div class="card-body padding">
                <img class="img-fluid" src="{{asset('public/images/mobile.jpg')}}" alt="web-design">
              </div>
              <div class="card-footer">
                <h6 class="text-capitalize text-center">mobile app development</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-lg-3 padding">
            <div class="card">
              <div class="card-body padding">
                <img class="img-fluid" src="{{asset('public/images/database.jpg')}}" alt="web-design">
              </div>
              <div class="card-footer">
                <h6 class="text-capitalize text-center">Database Administration</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- skills -->

  <div class="container-fluid py-5 pt-5" id="skill">
    <div class="content px-5">
      <div class="head text-center padding">
        <div class="title mb-5">
          <h3>Skills</h3>
          <hr>
        </div>
        <div class="text-center">
          <p class="mx justify-content-center">I have facile learning ability and specialize in different technologies for both web and mobile application development </p>
        </div>
      </div>
      <div class="content jumbotron">
        <div class="col-lg-12 col-sm-12">
          <div class="html">
            <div class="title d-flex justify-content-between py-1">
              <span>HTML5</span> <span style="color: green;">90%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="css">
            <div class="title d-flex justify-content-between py-1">
              <span>CSS3</span> <span style="color: green;">90%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="js">
            <div class="title d-flex justify-content-between py-1">
              <span>Javascript</span> <span style="color: green;">60%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="java">
            <div class="title d-flex justify-content-between py-1">
              <span>Java</span> <span style="color: green;">80%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="php">
            <div class="title d-flex justify-content-between py-1">
              <span>PHP</span> <span style="color: green;">70%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="spring">
            <div class="title d-flex justify-content-between py-1">
              <span>Spring Framework</span> <span style="color: green;">80%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="laravel">
            <div class="title d-flex justify-content-between py-1">
              <span>Laravel Framework</span> <span style="color: green;">70%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="algorithm">
            <div class="title d-flex justify-content-between py-1">
              <span>Algorithm design</span> <span style="color: green;">85%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- portfolio -->
  <div class="container py-5 pt-5" id="portfolio">
    <div class="head px-5 text-center padding">
      <div class="title">
        <h3>Portfolio</h3>
        <hr>
      </div>
    </div>
    <div class="row px-5 text-center ">
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 pt-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img class="img-fluid block text-center py-5 px-2 " src="{{asset('public/images/hng.png')}}" alt="hng-logo">
          <div class="over pt-5">
            <p class="align-middle text-center my-auto ">I undergone training at HNG. <br> <span style="color: orange;">2021</span> </p>
            <span><a style="color: orange; " href="#">check it out here...</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact -->
  <div class="container-fluid bg px-5 py-5" id="contact">
    <div class="head px-5 text-center padding">
      <div class="title">
        <h3 style="color: #e2e2e2;">Contact</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mt-5 ">
        <div class="card py-2 text-center">
          <div class="title mt-3">
            <h5>I can be of help!</h5>
            <hr>
            <div class="card-body padding p-3 mb-3">
              <ul class="">
                <li class="nav-link text">Do you need an urgent reliable software solution for your company?</li>
                <li class="nav-link text">Are you searching for tech geek to handle your projects?</li>
                <li class="nav-link text">Do you want to the best services rendered to you even while at home?</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 ">
        <form action="{{route('sendMessage')}}" method="post">
          @if(Session::get('error'))
          <div class="alert alert-danger">
            <p>{{Session::get('error')}}</p>
          </div>
          @endif
          @if(Session::get('success'))
          <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
          </div>
          @endif
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <span class="ml-5 text-light bg-danger ">@error('name'){{$message}}@enderror</span>
            <input type="Name" class="form-control" id="name" name="name" placeholder="Enter Name">
          </div>

          <div class="form-group">
            <label for="email">Email address</label><span class="ml-5 text-danger">@error('email'){{$message}}@enderror</span>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <span class="ml-5 text-danger">@error('message'){{$message}}@enderror</span>
            <textarea class="form-control" name="message" placeholder="Enter your text" id="exampleFormControlTextarea1" rows="7"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div class="container-fluid text-center bg-wave">
    <footer class="p-5">
      <div class="lead">
        <div class="title">
          <h4>James Damilare</h4>
          <h5 class="fw-normal mt-2">Backend Developer</h5>
        </div>
        <div class="social-nav mt-0">
          <nav role=" navigation">
            <ul class="nav justify-content-center">
              <li class="nav-item"><a class="nav-link" href="https://twitter.com/" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/Jayhmz" title="GitHub"><i class="fab fa-github"></i><span class="menu-title sr-only">GitHub</span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/james-damilare-75275a140/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>

            </ul>
          </nav>
        </div>
      </div>
      <div class="mb-2">
        <span style="font-size: 14px;">&copy; James Damilare.</span>
      </div>
    </footer>
  </div>



  <script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('public/js/bootstrap.min.js')}}"> </script>
</body>

</html>