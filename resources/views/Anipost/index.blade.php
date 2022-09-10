<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <title>Document</title>
</head>
<body>
    @include('Anipost.header')
    <div class="container">
        <div class="col-12 col-lg-9 mb-3">
            <img class="mikupic" src="{{asset('image/mikuall5.png')}}" alt="">
        </div>
        <div class="row">
            <div class="col-12 col-lg-9 mb-3">
                <h2>Comic</h2>
                <div class="row mt-2 px-2">
             @foreach ($mangas as $item)
             
                    <div class="px-1 col-4 col-md-3 col-lg-2">
                        <a href='{{ url("Anipost/comic/".$item->id)}}'>
                        <img class="contentpic" src="{{asset('image/'.$item->picture)}}" alt="">
                        <div class="mb-0 pt-2 textbg">
                            <p style="margin-left: 11px;"> {{$item->name}}</p>
                           
                        </div>
                        </a>
                    </div>
                    @endforeach
                    {!! $mangas->links('pagination::bootstrap-5') !!}
               
                </div>
            </div>

        </div>
    </div>
</body>
<script src="{{url('js/header.js')}}"></script>
</html>
