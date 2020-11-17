<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
{{-- 
        <script src="http://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="http://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="http://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
         --}}
        {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script> --}}
        
<style>
table {
  border-collapse: collapse;
}


table, th, td {
  border: 1px solid black;
  padding: 10px;
  text-align: left;
}
</style>

</head>
<body>

    <table style="margin-right: 80%" align="Left">
        <tr>
            <th colspan="2" scope="col" style="font-size: 25px; text-align: center">Data Anak</th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{$baby->name}}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{$baby->gender}}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{$baby->born}}</td>
        </tr>
        <tr>
            <th>Panjang Badan</th>
            <td>{{$baby->height}} cm</td>
        </tr>
        <tr>
            <th>Berat Badan</th>
            <td>{{$baby->weight}} kg</td>
        </tr>
        <tr>
            <th>Nama Ayah</th>
            <td>{{$baby->dad}}</td>
        </tr>
        <tr>
            <th>Nama Ibu</th>
            <td>{{$baby->mom}}</td>
        </tr>
    </table><br><br><br>
    {{-- <div class="container mt-4">
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
                    <div class="card-body">
                        <table class="table" style="font-size: 15px; text-align: center; height: 380px " align="center">
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
                    </div>
                </div>
            </div>
        </div> --}}
      <div class="row">
          <div class="col">
            <div class="card mt-5">
            <table class="table" style="margin-top: 4%; text-align:center" align="left">
                <thead>
                    <tr>
                        <th colspan="7" scope="col" style="font-size: 25px;  text-align: center">Riwayat Pemeriksaan</th>
                    </tr>
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
                    <tr style="  text-align: center">
                        <td>{{$p->dibuat}}</td>
                        <td>{{ $p->tinggi }} cm</td>
                        <td>{{ $p->berat}} kg</td>
                        <td>{{ $p->umur}} bulan </td>
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->index }}</td>
                        <td>{{ $p->kader }}</td>
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
      </div>
    </div> 
    </div>

</body>
</html>
