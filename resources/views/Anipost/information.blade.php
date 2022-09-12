<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{url('css/information.css')}}">
        <link rel="stylesheet" href='{{url('css/header.css')}}'>
    <title>Laravel CRUD Index</title>
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
    
                <form action="{{route('information.search')}}" method="GET">
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
    <br>
    <div class="container mt2">
        <div class="row">
            <div class="col-lg-12 text-center">
                
            </div>
            <div>
                
            </div>
            @if(\Session::has('success'))
            <div class="alert alert-danger">
                <h4>{{\Session::get('success')}}</h4>
            </div>

            @endif
            @if(count($mangas)>0) 
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Picture</th>
                    <img class="contentpic" src="image/AniRoom" alt="">
                    <th width="280px">Action</th>
                </tr>
                
                @foreach($mangas as $item)
                 
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
            
                    <td> 
                        
                        <img class="contentpic" src="{{asset('image/'.$item->picture)}}" alt="" width="200px" height="250"></td>
                      
                    <td>    <a href="{{url('Anipost/edit/'.$item->id)}}" class="btn btn-warning">Edit</a>    
                            
                            <a href="{{url('Anipost/delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            
                    </td>
                </tr>  
                
               
                
                @endforeach
                @else
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Picture</th>
                        <img class="contentpic" src="image/AniRoom" alt="">
                        <th width="280px">Action</th>
                    </tr>
                    <tr>
                        <td>Not Found</td>
                        <td></td>
                        <td></td>
                       
                      
                    </tr>  
                                @endif 
                
          
               
            </table>
            {!! $mangas->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</body>
<script src="{{url('js/header.js')}}"></script>
</html>