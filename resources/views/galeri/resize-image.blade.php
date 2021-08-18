@extends('kompetensi-keahlian.master')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
            <form method="post" action="{{route("imageResize")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Choose File</label>
                    <input type="file" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="submit">
            </form>
        </div>
        </div>
    </div>
</body>
</html>
@endsection