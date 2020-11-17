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
                    <table  class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                        <tbody class="text-sm-left " id="tabel">
                            <tr>
                                <th scope="row" >Nama</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{$data->gender}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>{{$data->born}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Panjang Badan</th>
                                <td>{{$data->height}} cm</td>
                            </tr>
                            <tr>
                                <th scope="row">Berat Badan</th>
                                <td>{{$data->weight}} kg</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Ayah</th>
                                <td>{{$data->dad}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Ibu</th>
                                <td>{{$data->mom}}</td>
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
                    <table class="table table-bordered table-hover table-striped " style="font-size: 15px; text-align: center" align="center">
                        <tbody class="text-sm-left " id="tabel">
                            <tr>
                                <th scope="row">Status Gizi</th>
                                <td>{{$status}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Saran</th>
                                <td>{{$saran}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Riwayat</th>
                                <td>                                    
                                    <a href="{{ url('/statuses/riwayat', $data->id) }}">
                                        Cek Riwayat Status Gizi
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
      </div>
      <div class="row mt-4">
          <div style="text-align: right"  class="col">
            <a href="{{ route('statuses.show', $data->id)  }}" class="btn btn-primary">
                Kembali
            </a>
          </div>
      </div>

        </div>
@endsection