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
                        <h3 class="card-title">Edit Kategori</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{url('editkategori', ['id' => $kategori->id_kategori])}}" enctype="multipart/form-data" id="quickForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}" id="nama_kategori" placeholder="Jenis Kategori">
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