<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
               <a href="{{ route('Get.home') }}"><img src="{{asset('assets/img/thrive.png')}}" alt="" style="height:100px"></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('get.video') }}">Video</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('Get.conatct') }}">Contact</a></li>
                         <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('auth.logout') }}">Logout</a></li>
                         <li class="nav-item mx-0 mx-lg-3" ><h6 style="font-size:14px;color:#FFFFFF "></h6></li>
                    </ul>
                </div>
            </div>
        </nav>