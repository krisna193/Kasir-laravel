@extends('layout.master')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">+ Data Jenis</h3>
              </div>
            
              <form action="/jenis/simpan" method="POST">
              	@csrf
                <div class="card-body">
                 
                   <div class="form-group">
                    <label for="">Jenis Nama</label>
                    <input type="text" name="jenis_nama" class="form-control" id="" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="">Jenis Status</label>
                    <input type="text" name="jenis_status" class="form-control" id="" placeholder="">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
              </form>
            </div>

@endsection