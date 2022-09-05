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
    <title>Laravel CRUD Index</title>
</head>

<body>
    @include('Anipost.header')
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
                        @if($item->picture)
                        <img class="contentpic" src="{{asset('image/'.$item->picture)}}" alt="" width="200px" height="200"></td>
                        @endif
                    <td>    <a href="{{url('Anipost/edit/'.$item->id)}}" class="btn btn-warning">Edit</a>           
                            <a href={{"delete/".$item['id']}} class="btn btn-danger">Delete</a>
                       
                    </td>
                </tr>
            
                @endforeach
            </table>
            {!! $mangas->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</body>
<script src="{{url('js/header.js')}}"></script>
</html>