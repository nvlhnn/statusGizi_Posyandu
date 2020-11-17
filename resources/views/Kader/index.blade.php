@extends('layouts.app')
@section('content')
<div class="container mt-4">
            <div class="card mt-2">
                <div class="card-header text-center">
                    <h2><strong>Data Kader</strong></h2>
                </div>
                <div class="card-body">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <input class="form-control" type="search" id="search" placeholder="Search" aria-label="Search" style="width: 350px">
                        </li>
                        <li class="list-inline-item" style="margin-left: 540px">
                            <a href="{{route('kader.create')}}" class="btn btn-primary">
                                <i class="plus icon"></i>
                                Tambah Kader
                            </a>
                        </li>
                    </ul>
                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px; text-align: center" align="center">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 17px;">ID</th>
                                <th scope="col" style="font-size: 17px;">Nama</th>
                                <th scope="col" style="font-size: 17px;">Email</th>
                                <th scope="col" style="font-size: 17px;">Terdaftar Sejak</th>
                            </tr>
                        </thead>
                        @php
                            $no=1;
                        @endphp
                        <tbody id="tabel">
                            @foreach($user as $p)
                            <tr style="position: center center">
                                <td >{{$p->id}}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection