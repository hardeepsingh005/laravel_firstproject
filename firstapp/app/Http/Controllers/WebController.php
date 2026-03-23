<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class WebController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function services() 
    {
        return view('Pages.services');
    }

     public function blog() 
    {
        return view('Pages.blog');
    }
    
     public function contact() 
    {
        return view('Pages.contact');
    }

    public function bookappointment() 
    {
        return view ('Pages.bookappointment');
    }


    public function get_data(){

    // $data = DB::table('students')->get();


// $data =  DB::table('students')->where('name')->get();

  $data = DB::table('students')
                ->where('student_ID',1)   
                ->get();


    // dd($data);
    // return $data;
      return view('Pages.test_data' , compact('data'));

    }
}
