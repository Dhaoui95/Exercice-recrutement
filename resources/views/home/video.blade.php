@extends('layout')
@section('content')

<header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar video-->
                <video class="masthead-avatar mb-5" width="620" height="340"  controls>
                  <source src="{{asset('assets/video/presentation.mp4')}}" type=video/mp4>
              </video>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Video de Presentation</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
    
               
            </div>
        </header>



  
