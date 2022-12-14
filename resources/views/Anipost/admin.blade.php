@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="http://127.0.0.1:5173/resources/sass/app.scss"/>  
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href='{{url('css/header.css')}}'>
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
                <h2 style="border-bottom: 1px solid #bebebe;">Comic</h2>
                <div class="row mt-2 px-2">
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
                    {!! $mangas->links('pagination::bootstrap-5') !!}
               
                </div>
            </div>

        </div>
    </div>
</body>
<script type="module" src="http://127.0.0.1:5173/resources/js/app.js"></script>

<script src="{{url('js/header.js')}}"></script>
</html>
