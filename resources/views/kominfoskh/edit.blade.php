@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" cross origin="anonymous">

<body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

        <div class="row">
            <form action="/kominfoskh/{{$kominfoskh->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="Nama" type="text" class="form-control" id="Nama"
                        aria-describedby="EmailHelp" placeholder="Nama" value="{{$kominfoskh->Nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keperluan</label>
                    <input name="Keperluan" type="text" class="form-control" id="Keperluan"
                        aria-describedby="EmailHelp" placeholder="Keperluan" value="{{$kominfoskh->Keperluan}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="Alamat" class="form-control" id="Alamat" rows="3"
                        placeholder="Alamat">{{$kominfoskh->Alamat}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ruang</label>
                    <input name="Ruang" type="text" class="form-control" id="Ruang"
                        aria-describedby="EmailHelp" placeholder="Ruang" value="{{$kominfoskh->Ruang}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input name="Status" type="text" class="form-control" id="Status"
                        aria-describedby="EmailHelp" placeholder="Status" value="{{$kominfoskh->Status}}">
                </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Bukti</label>
                        <input name="fotos" type="file" class="form-control" id="fotos"
                            aria-describedby="EmailHelp" placeholder="fotos" value="{{$kominfoskh->fotos}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross
            origin="anonymous"></script>
</body>
@endsection