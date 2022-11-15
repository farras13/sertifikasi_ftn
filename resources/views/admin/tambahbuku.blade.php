@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Buku</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="{{ route('tambahbuku') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Buku</label>
                                <input type="text" name="judul" class="form-control" id="jenis" placeholder="Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit">
                            </div>
                            <div class="form-group">
                                <label for="halaman">Halaman</label>
                                <input type="text" name="halaman" class="form-control" id="halaman" placeholder="Halaman">
                            </div>
                            <div class="form-group">
                                <label for="thn_terbit">Tahun Terbit</label>
                                <input type="text" name="thn_terbit" class="form-control" id="thn_terbit" placeholder="Tahun Terbit">
                            </div>
                            <div class="form-group">
                                <label for="judul">Kategori</label>
                                <select type="Kelas" name="Kelas" class="form-control">
                                    @foreach($kategori as $ktg)
                                    <option value="{{$ktg->id_kategori}}">{{$ktg->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga_buku">Harga Buku</label>
                                <input type="text" name="harga_buku" class="form-control" id="harga_buku" placeholder="Harga Buku">
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input name="gambar_buku" class="form-control" type="file" id="gambar_buku" accept="image/*">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection