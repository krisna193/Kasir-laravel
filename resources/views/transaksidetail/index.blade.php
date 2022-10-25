@extends('layout.master')
@section('content')
              <div class="card-header">
                <h3 class="card-title">Tampil Data transaksi detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/transaksidetaildetail/tambah" class="btn btn-primary">Tambah</a>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id transaksidetail</th>
                    <th>Id Barang</th>
                    <th>transaksi Jenis</th>
                    <th>transaksi Harga</th>
                    <th>transaksi Jumlah</th>
                    <th>transaksi detail Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($transaksidetail as $row)                    
                  <tr>
                    <td>{{$row->id_transaksi_detail}}</td>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->transaksi_jenis}}</td>
                    <td>{{$row->transaksi_harga}}</td>
                    <td>{{$row->transaksi_jumlah}}</td>
                    <td>{{$row->transaksi_detail_status}}</td>
                    <td>
                      <a href="/transaksidetaildetaildetail/detail/{{$row->id_transaksidetaildetail}}" class="btn btn-primary">Detail</a>
                      <a href="/transaksidetaildetail/ubah/{{$row->id}}" class="btn btn-danger">Edit</a>
                      <a href="/transaksidetaildetail/hapus/{{$row->id}}" class="btn btn-warning">Delete</a>
                    </td>
                  </tr>
@endforeach                
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
@endsection