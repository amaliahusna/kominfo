<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            
            <th>Nama</th>
            <th>Keperluan</th>
            <th>Alamat</th>
            <th>Ruang</th>
            <th>Status Check In</th>
            <th>Waktu Check In</th>
            <th>Waktu Check Out</th>
            <th>Aksi</th>
        </tr>    
    </thead>
    <tbody>
        @foreach($kominfoskh as $kmf)
            <tr>
               
                <td>{{$kmf->Nama}}</td>
                <td>{{$kmf->Keperluan}}</td>
                <td>{{$kmf->Alamat}}</td>
                <td>{{$kmf->Ruang}}</td>
                <td>{{$kmf->Status}}</td>
                <td>{{$kmf->created_at}}</td>
                <td>{{$kmf->updated_at}}</td>
            </tr>
            @endforeach
    </tbody>
</table>