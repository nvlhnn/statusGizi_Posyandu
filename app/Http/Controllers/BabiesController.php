<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baby;
use Illuminate\Support\Facades\Input;

class BabiesController extends Controller
{
    public function index()
    {
        $baby = baby::paginate(4);
        return view('Data Anak/index', compact('baby'));

        // $baby = baby::all();
        // $d =  \Carbon\Carbon::parse($baby[0]->born)->diff(\Carbon\Carbon::now())->format('%m');
        // dd($d);

    }
    public function create()
    {
        return view('Data Anak/add');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'alpha' => ':attribute harus berupa huruf saja',
            'numeric' => ':attribute harus berupa angka saja',
        ];

        $attributes=[
            'name' =>'Nama Bayi',
            'gender' => 'Jenis Kelamin',
            'born' => 'Usia',
            'height' => 'Tinggi Badan',
            'weight' => 'Berat Badan',
            'dad' => 'Nama Ayah',
            'mom' => 'Nama Ibu' ,
            'address' => 'Alamat'                        

        ];

        $this->validate($request,[
            'name' => 'required|alpha',
            'gender' => 'required',
            'born' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'dad' => 'required|alpha',
            'mom' => 'required|alpha', 
            'address' =>'required'

        ], $messages, $attributes);

        Baby::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'born' => $request->born,
            'height' => $request->height,
            'weight' => $request->weight,
            'dad' => $request->dad,
            'mom' => $request->mom, 
            'address' => $request->address
        ]);
        session()->flash('notif', 'Data berhasil ditambahkan');

        return redirect()->route('babies.index');

    }


    public function edit($id)
    {
        $baby = Baby::find($id);
        return view('Data Anak/edit', compact('baby'));    
    }


    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'alpha' => ':attribute harus berupa huruf saja',
            'numeric' => ':attribute harus berupa angka saja',
        ];

        $attributes=[
            'name' =>'Nama Bayi',
            'gender' => 'Jenis Kelamin',
            'born' => 'Usia',
            'height' => 'Tinggi Badan',
            'weight' => 'Berat Badan',
            'dad' => 'Nama Ayah',
            'mom' => 'Nama Ibu' ,
            'address' => 'Alamat'                        

        ];

        $this->validate($request,[
            'name' => 'required|alpha',
            'gender' => 'required',
            'born' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'dad' => 'required|alpha',
            'mom' => 'required|alpha', 
            'address' =>'required'

        ], $messages, $attributes);

        $baby = Baby::find($id);
        $baby->name  = $request->name;
        $baby->gender  = $request->gender;
        $baby->born  = $request->born;
        $baby->height = $request->height;
        $baby->weight = $request->weight;
        $baby->dad   = $request->dad;
        $baby->mom = $request->mom;
        $baby->address      = $request->address;

        
        $baby->save();
        session()->flash('notif', 'Destinasi Berhasil diubah');

        return redirect()->route('babies.index'); 
    }

    public function destroy($id)
    {
        $place = Baby::find($id);
        $place->delete();

        return redirect()->route('babies.index');
    }

    
}