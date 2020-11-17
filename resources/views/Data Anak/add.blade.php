@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card w-50 ml-5 mr-5">
      <div class="card-header text-center mb-5">
        <h1>Tambah Data Anak</h1>
      </div>
   @if (count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif
   <form action="{{ route('babies.store') }}" method="post" enctype="multipart/form-data" class="ml-5 mr-5 mb-5">
       {{ csrf_field() }}
       <div class="form-group">
           <label for="name">Nama Bayi:</label>
           <input type="text" class="form-control" id="" name="name">
       </div>
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Laki-Laki" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Perempuan">
                  <label class="form-check-label" for="gridRadios2">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
        <div class="form-group">
            <label for="name">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="" name="born">
        </div>
        <div class="form-group">
            <label for="name">Panjang Badan:</label>
            <input type="text" class="form-control" id="" name="height">
        </div>                
       <div class="form-group">
            <label for="day">Berat Badan: </label>
            <input type="text" class="form-control" id="" name="weight">
        </div>
       <div class="form-group">
           <label for="open">Nama Ayah: </label>
           <input type="text" class="form-control" id="" name="dad">
       </div>
       <div class="form-group">
           <label for="close">Nama Ibu: </label>
           <input type="text" class="form-control" id="" name="mom">
       </div>
       <div class="form-group">
            <label for="desc">Alamat:</label>
            <textarea class="form-control" id="alamat" name="address"></textarea>
        </div>
        <div class="form-group">
          <button style="float: right" type="submit" class="btn btn-md btn-success">Submit</button>
      </div>
  </form>
 </div>
</div>
<div class="row w-100 justify-content-end">
 <a href="{{ url()->previous() }}" class="btn btn-primary" style="float: right"> Kembali </a>

</div>

    </div>
@endsection







