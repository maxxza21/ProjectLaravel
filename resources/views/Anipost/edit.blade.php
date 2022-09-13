<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="{{url('css/upload.css')}}">
    <link rel="stylesheet" href="{{url('css/input.css')}}">
    <link rel="stylesheet" href='{{url('css/header.css')}}'>
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
                      <div class="search-field"><input type="text" id="image" name="search" placeholder="Search..."><button class="navbutton" style="border: none;"><i class='bx bx-search' style="margin-top: -10px;"></i></button>
                      <div class="searchbar" id="searchresult"></div>
               
                      </div>
                    </div>
                    
                    </form>
            </div>
        </div>
    </nav>
    <h2 style="text-align: center; margin-top: 20px;">Edit Manga</h2>
    <div class="container" style="height: 1200px;">
    <section class="col-lg-10 col-md-10 col-sm-10">
       
          
           
      
        <form class="box" action="{{url('Anipost/update/'. $mangas->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
            @if(session('alert'))
    <div class="alert alert-success">
    <p> {{session('alert')}}</p>
    </div>
@endif

            <div class="form-group">
                <p class="text">Title Name</p>
                <input type="text" class="form-control" name="name" value="{{$mangas->name}}">
            </div>
            <div class="form-group">
                <p class="text">Second Name</p>
                <input type="text" class="form-control" name="secondname" value="{{$mangas->secondname}}">
            </div>
            <div class="form-group">
                <p class="text">
                    Author</p>
                <input type="text" class="form-control" name="author" value="{{$mangas->author}}">
            </div>
            <div class="form-group">
                <p class="text">Artist</p>
                <input type="text" class="form-control" name="artist" value="{{$mangas->artist}}">
            </div>
            <div class="form-group">
                <p class="text">Status</p>
                <input  type="radio" name="status" value="On Going" {{ ($mangas->status == "On Going") ? 'checked' : ''}}>On Going
                <input style="margin-left: 10px;" type="radio" name="status" value="Closed" {{ ($mangas->status == "Closed") ? 'checked' : ''}}>Closed
   
            </div>
            <div class="form-group">
                <p class="text">Website(URL)</p>
                <input type="text" class="form-control" name="website" value="{{$mangas->website}}">
            </div>
            <div class="form-group">
                <p class="text">Synopsis</p>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="synopsis" value="{{$mangas->synopsis}}">{{$mangas->synopsis}}</textarea>
            </div>
        <p>Upload file</p>
        <div>
            <input type="file" id="upload" name="picture" value="{{$mangas->picture}}" style="display: none;" >
            <label for="upload" value="{{$mangas->picture}}" >{{$mangas->picture}}</label>
            
        </div>
        <button type="submit"><span>&#8682; Update</span><span class="uploading">Upload.....</span></button>
        <button class="cancle">Cancle Upload</button>
        <div class="pr">
            <strong>
                <h4 class="ex">PDF</h4>
                <h5 class="size">2.5kb</h5>
            </strong>
            <progress min="0" max="100" value="0"></progress>
            <span class="progress-indicator"></span>
       
        </div>
    </form>
  
    </section>
    </div>
    {{-- <form action="{{url('Anipost/upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image_name"></label>
            <input type="text" class="form-control" name="name">
            <img class="contentpic" src="image/AniROOM.png" alt="">
        </div>
    <div class="form-group">
        <label for="image_upload">เธ เธฒเธเธเธฃเธฐเธเธญเธ</label>
        <input type="file" class="form-control" name="picture">
        
    </div>
    <button type="submit" class="btn btn-primary">เธเธฑเธเธ—เธถเธ</button>
</form> --}}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{url('js/header.js')}}"></script>
<script src="{{url('js/upload.js')}}"></script>

</html>