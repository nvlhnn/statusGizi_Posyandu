@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Data Anak</strong></h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                        <tbody class="text-sm-left " id="tabel">
                            <tr>
                                <th scope="row" >Nama</th>
                                <td>{{$baby->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{$baby->gender}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>{{$baby->born}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Panjang Badan</th>
                                <td>{{$baby->height}} cm</td>
                            </tr>
                            <tr>
                                <th scope="row">Berat Badan</th>
                                <td>{{$baby->weight}} kg</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Ayah</th>
                                <td>{{$baby->dad}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Ibu</th>
                                <td>{{$baby->mom}}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="{{ route('babies.edit', $baby->id) }}" style="float:right" class="btn btn-secondary" >Update</a></td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Data Gizi</strong></h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                        <tbody class="text-sm-left " id="tabel">
                            <tr>
                                <th scope="row">Cek Status Gizi</th>
                                <td><a href="{{ url('/fuzzy', $baby->id) }}" onclick="return confirm('Hitung status untuk berat badan dan panjang badan saat ini ?');">status</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Cek Riwayat Pemeriksaan</th>
                                <td><a href="{{ url('/statuses/riwayat', $baby->id) }}">Riwayat</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                {{-- <div class="card-body" style="text-align: center">
                    <a href="{{ url('/fuzzy', $baby->id) }}" class="btn btn-primary">Cek Status Gizi</a>
                </div>
                <div class="card-body" style="text-align: center">
                    <a href="{{ url('/statuses/riwayat', $baby->id) }}" class="btn btn-primary">Cek Status Gizi</a>
                </div> --}}
            </div>
        </div>
    </div>
 
  <div class="row mt-4">
      <div style="text-align: right"  class="col">
        <a href="{{ route('babies.index') }}" class="btn btn-primary">
            Kembali
        </a>
      </div>
  </div>

            
</div>
@endsection