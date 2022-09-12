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
    <div class="d-none d-lg-block d-xl-block" style="height: auto !important;">
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
                                                    <td width="20%" class="text-white text-right">{{$mangas->author}}
                                                    </td>
                                                    <td class="text-information" width="15%">First Release</td>
                                                    <td width="20%" class="text-white text-right">
                                                        {{$mangas->created_at->format('d-m-Y')}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-information">Artist</td>
                                                    <td class="text-white text-right">{{$mangas->artist}} </td>
                                                    <td class="text-information">Latest Update</td>
                                                    <td class="text-white text-right">
                                                        {{$mangas->updated_at->format('d-m-Y')}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-information">Status</td>
                                                    <td class="text-white text-right">{{$mangas->status}}</td>
                                                    <td class="text-information">Views</td>
                                                    <td class="text-white text-right">Coming soon</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-information">Website&nbsp;</td>
                                                    <td class="text-right" colspan="5"
                                                        style="max-width: 220px; overflow: hidden;"><a
                                                            href="{{$mangas->website}}"
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
                                    <div class="col-12 col-lg-4 mt-0 px-1"><a href="#" target="_parent"
                                            class="svelte-1w8b2xy">
                                            <div class="bg-gradient-light rounded py-1 px-2 mb-1"><b
                                                    class="chapter">Ch.1</b> <span class="chapter-name">Coming
                                                    soon</span>
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
                            <div class="card-body px-3 py-2"><b>Comment Rules</b> ขอความร่วมมือในการใช้ภาษาสุภาพและงดการ
                                Spoiled
                                เนื้อเรื่อง รวมถึงแจ้ง Link ต่างๆ ในช่อง Comment หากแอดมินพบเห็นหรือได้รับแจ้ง
                                จะทำการแบนผู้ใช้งานตลอดกาล</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="d-block d-lg-none d-xl-none">
        <div class="text-center">
            <h4 class="mb-1">{{$mangas->name}}</h4>
            <p class="mb-2"></p> <img src={{asset('image/'.$mangas->picture)}} alt=""
                class="rounded" style="max-width: 190px; height: auto;">
            <div class="my-2"><b>Author : </b><span class="text-white">{{$mangas->author}}</span>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Artist : </b><span class="text-white">{{$mangas->artist}}</span>
                <br>
                <div
                    style="display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: calc(100% - 80px);">
                    <b>Website&nbsp;:&nbsp;</b> <a href="{{$mangas->website}}"
                        class="text-white" rel="noreferrer"
                        target="_blank">{{$mangas->website}}</a></div>
            </div>
        </div>
        <div class="rounded p-2 bg-light mx-2 mt-2 mute-text">{{$mangas->synopsis}}</div>
        <div class="my-3 px-2"></div>
        <div class="row px-2"> </div>
 
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home1" role="tabpanel">
                <div class="card">
                    <div class="card-body p-3">
                        <div style="float: right; margin-right: 0em;"><button class="btn btn-sm btn-light"><i
                                    class="mdi mdi-sort-variant"></i></button></div>
                                    <h4 class="chapter-title"><i class="bx bx-list-ol"></i> Chapter List</h4> <br
                                    style="clear: both; line-height: 100%;">
                        <div class="row g-3">
                            <div class="col-12 col-lg-4 mt-0 px-1"><a href="https://www.nekopost.net/comic/11163/19"
                                    target="_parent" class="svelte-1w8b2xy">
                                    
                                    
                                    <div class="bg-gradient-light rounded py-1 px-2 mb-1"><b
                                        class="chapter">Ch.1</b> <span class="chapter-name">Coming
                                        soon</span>
                                    <div class="chapter"><b class="svelte-1w8b2xy">By</b>
                                        <span class="chapter-name"> Coming soon </span>
                                    </div>
                                </div>
                            </a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="profile1" role="tabpanel">
                <div class="card bg-gradient-secondary rounded text-dark svelte-52e3hm">
                    <div class="card-body px-3 py-2"><b>Comment Rules</b> ขอความร่วมมือในการใช้ภาษาสุภาพและงดการ Spoiled
                        เนื้อเรื่อง รวมถึงแจ้ง Link ต่างๆ ในช่อง Comment หากแอดมินพบเห็นหรือได้รับแจ้ง
                        จะทำการแบนผู้ใช้งานตลอดกาล</div>
                </div>
                <div class="card bg-white svelte-52e3hm">
                    <div class="card-body p-2">
                        <div style="min-height: 300px;">
                            <div id="remark42" bind="remark42"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="messages1" role="tabpanel">
                <div class="bg-light p-2 rounded">
                    <div class="row g-2">
                        <div class="col-2 pt-2 text-center">
                            <h4><i class="far fa-lightbulb"></i></h4>
                        </div>
                        <div class="col-4"><small>First Release</small>
                            <h6>{{$mangas->created_at->format('d-m-Y')}}</h6>
                        </div>
                        <div class="col-2 pt-2 text-center">
                            <h4><i class="far fa-bell"></i></h4>
                        </div>
                        <div class="col-4"><small>Last Update</small>
                            <h6>{{$mangas->updated_at->format('d-m-Y')}}</h6>
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-2 pt-2 text-center">
                            <h4><i class="far fa-lightbulb"></i></h4>
                        </div>
                        <div class="col-4"><small>Status</small>
                            <h6>{{$mangas->status}}</h6>
                        </div>
                        <div class="col-2 pt-2 text-center">
                            <h4><i class="far fa-bell"></i></h4>
                        </div>
                        <div class="col-4"><small>Views</small>
                            <h6>0</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="messages2" role="tabpanel"></div>
        </div>
        <div class="px-2">
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
        </div> <br>
    </div>

    </div>
</body>
<script src="{{url('js/header.js')}}"></script>

</html>
