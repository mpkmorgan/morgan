<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

@if(session()->has('message'))

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    
    {{session()->get('message')}}

</div>

@endif

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Location</h6>
                        <span>NAIROBI, KEN</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>morgankuloba@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+254 707 568 486</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>eQuip</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
               
                

                @if(Route::has('login'))

                @auth

                <a href="{{'myappointment'}}" class="nav-item nav-link">My Appointments</a>

                <x-app-layout>
    
                </x-app-layout>

                @else
                <a href="{{route('login')}}" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Login <i class="bi bi-arrow-right"></i></a>
                <a href="{{route('register')}}" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Register <i class="bi bi-arrow-right"></i></a>

                
                    
                @endauth
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


   
    

    <div align="center" style="padding:70px;" >
        <table >
            <tr>
                <th style="padding:10px; font-size: 30px">Name</th>
                <th style="padding:10px; font-size: 30px">Date</th>
                
                <th style="padding:10px; font-size: 30px">Status</th>
                <th style="padding:10px; font-size: 30px">Message</th>
                <th style="padding:10px; font-size: 30px">Cancel Appointment</th>
            </tr>
                @foreach($appoint as $appoints)
            <tr align="center">
                <td style="padding: 10px">{{$appoints->vet}}</td>
                <td style="padding: 10px">{{$appoints->date}}</td>
                <td style="padding: 10px">{{$appoints->status}}</td>
                <td style="padding: 30px">{{$appoints->message}}</td>
                <td><a class="bt btn-danger" onclick="return confirm ('Are toy sure you want to delete this ?')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
            </tr>
                @endforeach
        </table>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
