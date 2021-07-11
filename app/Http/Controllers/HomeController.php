<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('data_file'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }
}
