@extends('layout.master')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Supplier</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/supplier/update/{{$supplier->id}}" method="POST">
              	@csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Id Supplier</label>
                    <input type="text" name="id_supplier" class="form-control" value="{{$supplier->id_supplier}}">
                  </div>
                   <div class="form-group">
                    <label for="">Supplier Nama</label>
                    <input type="text" name="supplier_nama" class="form-control" value="{{$supplier->supplier_nama}}">
                  </div>
                 <div class="form-group">
                    <label for="">Supplier Alamat</label>
                    <input type="text" name="supplier_alamat" class="form-control" value="{{$supplier->supplier_alamat}}">
                  </div>
                 <div class="form-group">
                    <label for="">Supplier Phone</label>
                    <input type="text" name="supplier_phone" class="form-control" value="{{$supplier->supplier_phone}}">
                  </div>
                   <div class="form-group">
                    <label for="">Supplier Status</label>
                    <input type="text" name="supplier_status" class="form-control" value="{{$supplier->supplier_status}}">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
              </form>
            </div>

@endsection