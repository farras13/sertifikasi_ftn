@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">KATEGORI BUKU</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{url('createkategori')}}" class="btn btn-primary"><i class="fa fa-plus-square-o"></i>Tambah</a>
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $kategori)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$kategori->nama_kategori}}</td>
                    <td>
                        <form action="{{ url('/destroykategori',['id'=>$kategori->id_kategori]) }}" method="Post">
                            <a class="btn btn-warning" href="{{ url('/editkategori', ['id' => $kategori->id_kategori]) }}">Edit</a>
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Delete</button>
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