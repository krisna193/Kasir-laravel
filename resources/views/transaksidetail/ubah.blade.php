@extends('layout.master')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/transaksi/update/{{$transaksi->id}}" method="POST">
              	@csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Transaksi</label>
                    <input type="text" name="id_transaksi" class="form-control" value="{{$transaksi->id_transaksi}}">
                  </div>
                 <div class="form-group">
                    <label for="">Id Admin</label>
                    <input type="text" name="id_admin" class="form-control" value="{{$transaksi->id_admin}}">
                  </div>
                   <div class="form-group">
                    <label for="">Tanggal Transaksi</label>
                    <input type="date" name="transaksi_tanggal" class="form-control" value="{{$transaksi->transaksi_tanggal}}">
                  </div>
                   <div class="form-group">
                    <label for="">Transaksi Nonota</label>
                    <input type="text" name="transaksi_nonota" class="form-control" value="{{$transaksi->transaksi_nonota}}">
                  </div>
                   <div class="form-group">
                    <label for="">Transaksi Status</label>
                    <input type="text" name="transaksi_status" class="form-control" value="{{$transaksi->transaksi_status}}">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
              </form>
            </div>

@endsection