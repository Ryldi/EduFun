<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function get_writers(){
        $writers = Writer::all();
        return view('writer.writers', compact('writers'));
    }

    public function get_writer($id){
        $writer = Writer::find($id);
        return view('writer.writer_detail', compact('writer'));
    }
}
