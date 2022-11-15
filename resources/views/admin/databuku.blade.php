@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DATA BUKU</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{url('createbuku')}}" class="btn btn-primary"><i class="fa fa-plus-square-o"></i>Tambah</a>
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penerbit</th>
                    <th>Halaman</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $buku)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$buku->judul}}</td>
                    <td>{{$buku->penerbit}}</td>
                    <td>{{$buku->halaman}}</td>
                    <td>{{$buku->thn_terbit}}</td>
                    <td>{{$buku->kategori}}</td>
                    <td>{{$buku->harga_buku}}</td>
                    <td><img class="img-preview img-fluid" src="{{ url('/storage/'.$buku->gambar_buku) }}" style="max-width: 180px;"></td>
                    <td>
                        <form action="{{ url('/destroybuku',['id'=>$buku->id_buku]) }}" method="POST">
                            <a href="{{ url('/editbuku', ['id' => $buku->id_buku]) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fas fa-eraser"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection