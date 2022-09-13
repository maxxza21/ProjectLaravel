<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href='{{url('css/header.css')}}'>
    <link rel="stylesheet" href="{{url('css/search.css')}}">
    <title>Document</title>
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
    <div class="container">
        <div class="col-12 col-lg-9 mb-3">
            <img class="mikupic" src="{{asset('image/mikuall5.png')}}" alt="">
        </div>
        <div class="row">
            <div class="col-12 col-lg-9 mb-3">
                <h2 style="border-bottom: 1px solid #bebebe;">Comic</h2>
                <div class="row mt-2 px-2">
            @if(count($mangas)>0) 
             @foreach ($mangas as $item)
             
            
             @if($item->status == "On Going")
             
                    <div class="px-1 col-4 col-md-3 col-lg-2">
                        <a href='{{ url("Anipost/comic/".$item->id)}}'>
                        <img class="contentpic" src="{{asset('image/'.$item->picture)}}" alt="">
                        <div class="mb-0 pt-2 textbg">
                            <p style="margin-left: 11px;"> {{$item->name}}</p>
                            <p style="font-size:12px; margin:-5px 0 0 12px; color:#9295a4;">ตอนที่ Coming soon</p>
                           
                        </div>
                        </a>
                      
                    </div>
                 
                    @endif
                 
                    @endforeach
                    @else
                    <div style="font-size:20px;">Not Found</div>
                 @endif
                    {!! $mangas->links('pagination::bootstrap-5') !!}
               
                </div>
            </div>

        </div>
    </div>
</body>
<script src="{{url('js/header.js')}}"></script>
</html>
