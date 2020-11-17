<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

 

</head>
<body>
    

<h1>Users Graphs</h1>

<div style="width: 50%">
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


</body>
</html>



