@extends('layouts.app')

@section('content')
    <div class="container">
   <!-- Remove This Before You Start -->
   <h1>Tambah Data Anak</h1>
   <hr>
   @if (count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif
   <form action="{{ route('babies.update', $baby->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
       <div class="form-group">
           <label for="name">Nama Bayi:</label>
           <input type="text" class="form-control" id="" name="name" value="{{$baby->name}}">
       </div>
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Laki-Laki" >
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
            <input type="date" class="form-control" id="" name="born" value="{{$baby->born}}">
        </div>
        <div class="form-group">
            <label for="name">Tinggi Badan:</label>
            <input type="text" class="form-control" id="" name="height" value="{{$baby->height}}">
        </div>                
       <div class="form-group">
            <label for="day">Berat Badan: </label>
            <input type="text" class="form-control" id="" name="weight" value="{{$baby->weight}}">
        </div>
       <div class="form-group">
           <label for="open">Nama Ayah: </label>
           <input type="text" class="form-control" id="" name="dad" value="{{$baby->dad}}">
       </div>
       <div class="form-group">
           <label for="close">Nama Ibu: </label>
           <input type="text" class="form-control" id="" name="mom" value="{{$baby->mom}}">
       </div>
       <div class="form-group">
            <label for="desc">Alamat:</label>
            <textarea class="form-control" id="alamat" name="address" value="">{{$baby->address}}</textarea>
        </div>
       <div class="form-group">
           <button type="submit" class="btn btn-md btn-primary">Submit</button>
           <button type="reset" class="btn btn-md btn-danger">Cancel</button>
       </div>
   </form>

    </div>
@endsection







