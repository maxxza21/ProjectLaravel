<link rel="stylesheet" href='{{url('css/header.css')}}'>
<nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i>
        <span class="logo navLogo"><a href="#"><img src="{{url('image/AniROOM.png')}}" alt=""
                    style="width:170px; height:auto;"></a></span>

        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="#">CodingLab</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="{{url('/Anipost/admin')}}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{url('/Anipost/information')}}">Information</a></li>
                <li><a href="{{ route('uploads')}}">Upload</a></li>
                <li><a href="{{url('/Anipost/contact')}}">Contact</a></li>
            </ul>
        </div>

        <div class="darkLight-searchBox">
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>

            <form action="{{route('web.search')}}" method="GET">
                <div class="searchBox">
                  <div class="searchToggle"><i class='bx bx-x cancel'></i><i class='bx bx-search search'></i></div>
                  <div class="search-field"><input type="text" id="image" name="search" placeholder="Search..."><button style="border: none;"><i class='bx bx-search' style="margin-top: -10px;"></i></button>
                  <div class="searchbar" id="searchresult"></div>
           
                  </div>
                </div>
                
                </form>
                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @else
                <a href="{{route('home')}}"><p style="color: red; padding-right:5px;">login</p></a>
                <a href="{{url('/register')}}"><p style="color: red">registor</p></a>
                @endif
        </div>
    </div>
</nav>
<script src="{{url('js/header.js')}}"></script>