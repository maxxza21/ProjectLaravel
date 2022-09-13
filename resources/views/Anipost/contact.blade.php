<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/contact.css')}}">
  <link rel="stylesheet" href="{{url('css/contactnavbar.css')}}">
  <link rel="stylesheet" href="{{url('css/header.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="http://127.0.0.1:5173/resources/sass/app.scss"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
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
					{{-- <li><a href="#">About</a></li>
					<li><a href="{{url('/Anipost/information')}}">Information</a></li>
					<li><a href="{{ route('uploads')}}">Upload</a></li> --}}
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
					<a href="{{route('home')}}"><p class="login" >login</p></a>
					<a href="{{url('/register')}}"><p class="registor" >registor</p></a>
					@endif
			</div>
		</div>
	</nav>
	<div class="container">
      
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2 style="text-align:center;">Contact Us</h2>
				<p><i style="color:green; font-size: 20px;" class="fa-brands fa-line"></i><span stlye="font-size: 18px;"> matsumiz</span></p>
				<p><i style="color:#3b5999; font-size: 20px;" class="fa fa-facebook-square" aria-hidden="true"></i><span stlye="font-size: 18px;"> Maxz Chatsoponpan</span></p>
				<p><i style="color:#000; font-size: 20px;" class="fa-solid fa-phone"></i><span stlye="font-size: 18px;"> 082-565-8900</span></p>
				<p><i style="color:antiquewhite; font-size: 20px;" class="fa fa-envelope"></i><span stlye="font-size: 18px;"> M.kantapat21@gmail.com</span></p>
				<p><i style="color:red; font-size: 20px;" class="fa fa-map-marker" aria-hidden="true"></i><span stlye="font-size: 18px;"> 713/8 sukumvit101 punnawittee25 10260</span></p>
        <h2 style="text-align:center;">Credit</h2>
        <p>Made logo: Somsak </p>
        <p>Dev Web: Kantapat Chatsoponpan</p>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/7add581fca.js" crossorigin="anonymous"></script>
</body>
<script type="module" src="http://127.0.0.1:5173/resources/js/app.js"></script>
<script src="{{url('js/header.js')}}"></script>
</html>