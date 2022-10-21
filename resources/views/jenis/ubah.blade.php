@extends('layout.master')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Jenis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/jenis/update/{{$jenis->id}}" method="POST">
              	@csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Jenis</label>
                    <input type="text" name="id_jenis" class="form-control" value="{{$jenis->id_jenis}}">
                  </div>
                   <div class="form-group">
                    <label for="">Jenis Nama</label>
                    <input type="text" name="jenis_nama" class="form-control" value="{{$jenis->jenis_nama}}">
                  </div>
                   <div class="form-group">
                    <label for="">Jenis Status</label>
                    <input type="text" name="jenis_status" class="form-control" value="{{$jenis->jenis_status}}">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
              </form>
            </div>

@endsection