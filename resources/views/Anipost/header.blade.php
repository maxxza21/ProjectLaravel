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
                <li><a href="{{url('/Anipost')}}">Home</a></li>
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
        </div>
    </div>
</nav>
<script src="{{url('js/header.js')}}"></script>