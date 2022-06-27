

<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{session('sukses')}} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>DAFTAR PENGUNJUNG KOMINFO</h1>
            </div>
            <table class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-2 my-sm-0 floatright" data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah Data
                </button>
                <form class="form-inline my-2 my-lg-0" method="GET" action="/kominfoskh">
                    <input name="cari" class="form-control w-75 mr-sm2" id="search" placeholder="Cari">
                    <button type="submit" class="btn btn-outline-secondary my-2 my-sm0">Cari</button>
                </form>
        </div>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Keperluan</th>
                <th>Alamat</th>
                <th>Ruang</th>
                <th>Status Check In</th>
                <th>Waktu Check In</th>
                <th>Waktu Check Out</th>
                <th>Bukti</th>
                <th>Aksi</th>
            </tr>
            @foreach($data_kominfoskh as $kominfoskh)
            <tr>
                <td>{{$kominfoskh->id}}</td>
                <td>{{$kominfoskh->Nama}}</td>
                <td>{{$kominfoskh->Keperluan}}</td>
                <td>{{$kominfoskh->Alamat}}</td>
                <td>{{$kominfoskh->Ruang}}</td>
                <td>{{$kominfoskh->Status}}</td>
                <td>{{$kominfoskh->created_at}}</td>
                <td>{{$kominfoskh->updated_at}}</td>
                <td>{{$kominfoskh->fotos}}</td>
                <td>
                    <img src="{{ asset('fotoktp/'.$kominfoskh->Foto)}}" alt="">
                </td>
                <td><a href="/kominfoskh/{{$kominfoskh->id}}/edit" class="btn btn-warning bgn-sm">Edit</a></td>
                <td><a href="/kominfoskh/delete/{{$kominfoskh->id}}" class="btn btn-danger bgn-sm"
                        onclick="return confirm ('Yakin Dihapus?')">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <a href="/kominfoskh/exportpdf" class="btn btn-sm btn-success">Export PDF</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukkan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/kominfoskh/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keperluan</label>
                            <input name="Keperluan" type="text" class="form-control" id="Keperluan"
                                aria-describedby="EmailHelp" placeholder="Keperluan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="Alamat" class="form-control" id="Alamat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ruang</label>
                            <input name="Ruang" type="text" class="form-control" id="Ruang" aria-describedby="EmailHelp"
                                placeholder="Ruang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bukti</label>
                            <input name="fotos" type="file" class="form-control" id="fotos" aria-describedby="EmailHelp"
                                placeholder="fotos">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script  type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script  type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script  type="application/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
