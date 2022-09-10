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
   
    <title>Document</title>
</head>
<body>
    @include('Anipost.header')
    <h2 style="text-align: center; margin-top: 20px;">Upload Manga</h2>
    <div class="container" style="height: 1000px;">
    <section>
        <form action="{{url('Anipost/upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session('status'))
    <div class="alert alert-success">
    <p> {{session('status')}}</p>
    </div>
@endif
            <div class="form-group">
                <p class="text">Title Name</p>
                <input type="text" class="form-control" name="name">
                <div style="margin-top: 0;" class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
                </div>
            </div>
            <div class="form-group">
                <p class="text">Second Name</p>
                <input type="text" class="form-control" name="secondname">
            </div>
            <div class="form-group">
                <p class="text">
                    Author</p>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="form-group">
                <p class="text">Artist</p>
                <input type="text" class="form-control" name="artist">
            </div>
            <div class="form-group" required>
                <p class="text">Status</p>
        
                    <input type="radio" class="form-check-input" name="status" value="On Going" {{old('status') == 'On Going' ? 'checked' : ''}}><span style="margin-left:5px;">On Going</span>
                    <input style="margin-left: 10px;" class="form-check-input" type="radio" name="status" value="Closed" {{old('status') == 'Closed' ? 'checked' : ''}}><span style="margin-left:5px;">Closed</span>
                    <div style="margin-top: 0;" class="text-danger">
                    @error('status')
                    {{$message}}
                @enderror
            </div>
            </div>
            <div class="form-group">
                <p class="text">Website(URL)</p>
                <input type="text" class="form-control" name="website">
            </div>
            <div class="form-group">
                <p class="text">Synopsis</p>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="synopsis"></textarea>
            </div>
            
        <p>Upload file</p>
        <div>
            <input type="file" id="upload" name="picture" style="display: none;" >
            <label for="upload">Select Files</label>
            <div style="margin-top: 0;" class="text-danger">
                @error('picture')
                {{$message}}
            @enderror
        </div>
        </div>
        <button type="submit"><span>&#8682; Upload</span><span class="uploading">Upload.....</span></button>
        
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