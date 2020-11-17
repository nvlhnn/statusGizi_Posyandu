@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

<div class="container mt-4">
    <div class="row mt-4">
        <div class="col">
            <div style="text-align: right"  class="col">
            <a href="{{ url('/statuses/riwayat/cetak', $baby->id) }}" class="btn btn-secondary">Cetak Riwayat</a>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Data Anak</strong></h2>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped " style="font-size: 15px; text-align: center; height: 415px " align="center">
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mt-2">
                <div class="card-header text-center mb-4">
                    <h2><strong>Grafik Perkembangan Gizi</strong></h2>
                </div>
                <div class="chart-area mr-5 ml-5 mb-5">
                    {!! $statusChart->container() !!}
                    {!! $statusChart->script() !!}
                </div>
            </div>
        </div>
    </div>
  <div class="row">
      <div class="col">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h2><strong>Riwayat Pemeriksaan</strong></h2>
            </div>
        <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
            <thead>
                <tr>
                    <th scope="col" style="font-size: 17px;">Tanggal Periksa</th>
                    <th scope="col" style="font-size: 17px;">Panjang Badan</th>
                    <th scope="col" style="font-size: 17px;">Berat Badan</th>                                
                    <th scope="col" style="font-size: 17px;">Umur</th>
                    <th  scope="col" style="font-size: 17px;">Status</th>
                    <th  scope="col" style="font-size: 17px;">Index</th>        
                    <th  scope="col" style="font-size: 17px;">Kader Pemeriksa</th>                               
                </tr>
            </thead>

            <tbody id="tabel">
                @foreach($history as $p)
                <tr style="position: center center">
                    <td>{{$p->dibuat}}</td>
                    <td>{{ $p->tinggi }} cm</td>
                    <td>{{ $p->berat}} kg</td>
                    <td>{{ $p->umur}} bulan</td>
                    <td>{{ $p->status }}</td>
                    <td>{{ $p->index }}</td>
                    <td>{{ $p->kader }}</td>

                    {{-- <td style="font-size: 20px">
                        <form action="{{ route('babies.destroy', $p->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: transparent; border: 0;" onclick="return confirm('Yakin hapus');"><i class="red trash alternate icon"></i></button>
                        </form>   
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
  </div>
    <div class="row mt-4">
        <div class="col">
            <div style="text-align: right"  class="col">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>  
        
</div>
@endsection