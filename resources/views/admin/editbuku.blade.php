@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Buku</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{url('editbuku', ['id' => $buku->id_buku])}}" enctype="multipart/form-data" id="quickForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Buku</label>
                                <input type="text" name="judul" class="form-control" id="jenis" value="{{$buku->judul}}" placeholder="Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" value="{{$buku->penerbit}}" id="penerbit" placeholder="Penerbit">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Halaman</label>
                                <input type="text" name="halaman" class="form-control" value="{{$buku->halaman}}" id="halaman" placeholder="Halaman">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tahun Terbit</label>
                                <input type="text" name="thn_terbit" class="form-control" value="{{$buku->thn_terbit}}" id="thn_terbit" placeholder="Tahun Terbit">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label>
                                <select type="Kelas" name="Kelas" class="form-control">
                                    @foreach($kategori as $ktg)
                                    <option value="{{$ktg->id_kategori}}">{{$ktg->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="text" name="harga_buku" class="form-control" value="{{$buku->harga_buku}}" id="harga_buku" placeholder="Harga Buku">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" name="gambar_buku" type="file" id="gambar_buku" required accept=".jpg,.png,.jpeg">
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