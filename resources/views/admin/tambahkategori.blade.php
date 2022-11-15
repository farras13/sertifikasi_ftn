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
                        <h3 class="card-title">Tambah Kategori</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="{{ route('tambahkategori') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kategori">Jenis Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Jenis Kategori">
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