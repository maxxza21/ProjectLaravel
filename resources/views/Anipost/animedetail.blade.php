<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="{{url('css/animedetail.css')}}">
    <title>Document</title>
</head>

<body>
    @include('Anipost.header')
    <div class="container" style="max-width: 1560px !important;padding: 50px 3em;height: auto !important;">
        <div class="box-left anime" style="height: auto !important;">
            <div class="card">
         
                <div class="card-body p-2"><img src="{{asset('image/'.$mangas->picture)}}" class="pictureanime"
                        alt="main cover" style=""></div>
                      
            </div>
        </div>
        <div class="box-right">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div>
                               
                                <h4 class="mb-1 text-white">{{$mangas->name}}</h4>
                                
                                <div class="text-information">{{$mangas->secondname}}</div>
                                <div class="mt-2">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="text-information" width="15%">Author</td>
                                                <td width="20%" class="text-white text-right">{{$mangas->author}}</td>
                                                <td class="text-information" width="15%">First Release</td>
                                                <td width="20%" class="text-white text-right">{{$mangas->created_at->format('d-m-Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-information">Artist</td>
                                                <td class="text-white text-right">{{$mangas->artist}} </td>
                                                <td class="text-information">Latest Update</td>
                                                <td class="text-white text-right">{{$mangas->updated_at->format('d-m-Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-information">Status</td>
                                                <td class="text-white text-right">On Going</td>
                                                <td class="text-information">Views</td>
                                                <td class="text-white text-right">Coming soon</td>
                                            </tr>
                                            <tr>
                                                <td class="text-information">Website&nbsp;</td>
                                                <td class="text-right" colspan="5"
                                                    style="max-width: 220px; overflow: hidden;"><a
                                                        href="https://bookwalker.jp/series/233711/list/"
                                                        class="text-white" rel="noreferrer"
                                                        target="_blank">{{$mangas->website}}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bg-light p-3 rounded">{{$mangas->synopsis}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body p-3">
                            
                            <h4 class="chapter-title"><i class="bx bx-list-ol"></i> Chapter List</h4> <br
                                style="clear: both; line-height: 100%;">
                            <div class="row g-3">
                                <div class="col-12 col-lg-4 mt-0 px-1"><a href="#"
                                        target="_parent" class="svelte-1w8b2xy">
                                        <div class="bg-gradient-light rounded py-1 px-2 mb-1"><b
                                                class="chapter">Ch.1</b>  <span
                                                class="chapter-name">Coming soon</span>
                                            <div class="chapter"><b class="svelte-1w8b2xy">By</b>
                                               <span class="chapter-name"> Coming soon </span>
                                            </div>
                                        </div>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">

                    <div class="card">
                        <div class="card-body p-3">
                            <h4 class="contributor">Contributor</h4>
                            <table width="100%">
                                <tr>
                                    <td width="90px"><img
                                            src="https://www.osemocphoto.com/avatar/avatar_81047.jpg??202209102025"
                                            onerror="this.src='assets/demo/bakeneko-manga.png';"
                                            class="img-thumbnail rounded-circle avatar-md" alt="Shielle"></td>
                                    <td><a href="https://www.nekopost.net/editor/81047" class="text-white"
                                            alt="Shielle Homepage">
                                            <h5 style="margin-left: 10px">Shielle</h5>
                                        </a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card bg-gradient-secondary">
                    <div class="card-body px-3 py-2"><b>Comment Rules</b> ขอความร่วมมือในการใช้ภาษาสุภาพและงดการ Spoiled
                        เนื้อเรื่อง รวมถึงแจ้ง Link ต่างๆ ในช่อง Comment หากแอดมินพบเห็นหรือได้รับแจ้ง
                        จะทำการแบนผู้ใช้งานตลอดกาล</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{url('js/header.js')}}"></script>

</html>
