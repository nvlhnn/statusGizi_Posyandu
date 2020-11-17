<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('apps.name', 'Poscandu.com') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>

    {{-- Script AJAX --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    {{-- Script API MapBox --}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/beranda.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/jadwal.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- chart --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .checked {
            color: orange;
        }
    </style>
</head>
<body>
{{-- 
    <div class="container mt-4">
        <div class="card p-3">
           <div class="card-header text-center mb-5">
                <h2><strong>Data Anak</strong></h2>
           </div>
        <div class="row">
            <div class="col-4">
                <div class="card mt-2">
                    <div class="card-header text-center">
                        <h2><strong>Biodata Anak</strong></h2>
    
                    </div>
                    <div class="card-body"> --}}
                        <table class="table table-bordered table-hover table-striped " style="font-size: 15px; text-align: center; height: 380px " align="center">
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
                                    <th scope="row">Tinggi Badan</th>
                                    <td>{{$baby->height}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Berat Badan</th>
                                    <td>{{$baby->weight}}</td>
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
                    {{-- </div>
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
                        <th scope="col" style="font-size: 17px;">Tinggi</th>
                        <th scope="col" style="font-size: 17px;">Berat</th>                                
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
                        <td>{{ $p->tinggi }}</td>
                        <td>{{ $p->berat}}</td>
                        <td>{{ $p->umur}}</td>
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
                    {{-- </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
      </div>
    </div> 
    </div> --}} --}}

</body>
</html>
