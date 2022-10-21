@extends('layout.master')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">+ Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/barang/simpan" method="POST">
              	@csrf
                <div class="card-body">
                
                 <div class="form-group">
                    <label for="">Barang Kode</label>
                    <input type="text" name="barang_kode" class="form-control" id="" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Barang Nama</label>
                    <input type="text" name="barang_nama" class="form-control" id="" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="">Id Jenis</label>
                    <select name="id_jenis" class="form-control">
                    <option>Monggo Dipilih</option>
                    @foreach($jenis as $row)
                    <option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
                    @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="">Id Supplier</label>
                    <select name="id_supplier" class="form-control">
                    <option>Monggo Dipilih</option>
                    @foreach($supplier as $row)
                    <option value="{{$row->id_supplier}}">{{$row->supplier_nama}}</option>
                    @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="text" name="harga_jual" class="form-control" id="" placeholder="">
                  </div>
                   <div class="form-group">
                    <label for="">Barang Status</label>
                    <input type="text" name="barang_status" class="form-control" id="" placeholder="">
                  </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
              </form>
            </div>

@endsection