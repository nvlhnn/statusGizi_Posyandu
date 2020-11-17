<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baby;
use DB;
use App\Charts\statusChart;
use PDF;
use PDFS;


class StatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function show($id)
    {
        $baby = Baby::find($id);

        // dd($baby);
        return view('Data Anak.status', compact('baby'));    
    }

    public function riwayat($id)
    {
        $baby = Baby::find($id);

        $history  = DB::table('statuses')
            ->join('babies', 'babies.id', '=', 'statuses.baby_id')
            ->join('users', 'users.id', '=', 'statuses.user_id')
            ->select('babies.name as nama','babies.born as born', 'statuses.height as tinggi','statuses.weight as berat', 'statuses.age as umur', 'statuses.index as index','statuses.created_at as dibuat', 'users.name as kader', 'statuses.status as status')
            ->where('statuses.baby_id',$id)
            ->groupBy('dibuat', 'nama', 'born', 'status', 'tinggi', 'berat', 'umur', 'index', 'kader')
            ->get();


            // dd($history[0]->status);


        $index = [];
        for($i=0; $i<sizeOf($history); $i++){
            $index[$i] = $history[$i]->index; 
        }

        $date = [];
        for($i=0; $i<sizeOf($history); $i++){
            $date[$i] = $history[$i]->dibuat; 
        }

        $statusChart = new statusChart;
        $statusChart->barwidth(0.0);
        $statusChart->displaylegend(false);
        $statusChart -> labels($date);
        $statusChart -> dataset('Total Penjualan (Rupiah)', 'line', $index)
            ->color("rgb(0, 0, 0)")
            ->backgroundcolor("rgb(0)")
            ->fill(false)
            ->linetension(0.1)
            ->dashed([5]);
        
        return view('Data Anak.history', compact('statusChart', 'history', 'baby'));
    }

    public function cetak($id)
    {
        $baby = Baby::find($id);

        $history  = DB::table('statuses')
            ->join('babies', 'babies.id', '=', 'statuses.baby_id')
            ->join('users', 'users.id', '=', 'statuses.user_id')
            ->select('babies.name as nama','babies.born as born', 'statuses.height as tinggi','statuses.weight as berat', 'statuses.age as umur', 'statuses.index as index','statuses.created_at as dibuat', 'users.name as kader', 'statuses.status as status')
            ->where('statuses.baby_id',$id)
            ->groupBy('dibuat', 'nama', 'born', 'status', 'tinggi', 'berat', 'umur', 'index', 'kader')
            ->get();


            // dd($history[0]->status);


        $index = [];
        for($i=0; $i<sizeOf($history); $i++){
            $index[$i] = $history[$i]->index; 
        }

        $date = [];
        for($i=0; $i<sizeOf($history); $i++){
            $date[$i] = $history[$i]->dibuat; 
        }

        $statusChart = new statusChart;
        $statusChart->barwidth(0.0);
        $statusChart->displaylegend(false);
        $statusChart -> labels($date);
        $statusChart -> dataset('Total Penjualan (Rupiah)', 'line', $index)
            ->color("rgb(0, 0, 0)")
            ->backgroundcolor("rgb(0)")
            ->fill(false)
            ->linetension(0.1)
            ->dashed([5]);

        // $pdf = Baby::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        
        $pdf = PDF::loadview('history_pdf', compact('statusChart', 'history', 'baby'));
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('qq.pdf');
        
        // return view('history_pdf', compact('statusChart', 'history', 'baby'));
    }
}
