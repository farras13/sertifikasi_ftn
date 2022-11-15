@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">DATA USER</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <hr>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.HP</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $user)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->nohp}}</td>
                    <td>{{$user->level_as}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection