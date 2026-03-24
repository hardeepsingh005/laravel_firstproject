<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;


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
        return view('Pages.bookappointment');
    }

    public function get_data()
    {

       // Query Builder
        // $data = DB::table('students')->get();

        // ORM
        // dd($data);
        // return $data;

        // $data = Student::select('student_ID','name')->get();

        $data = Student::all();

        return view('Pages.test_data',  compact('data'));

    }

    public function newData()
    {
        // DB::table('students')->Insert([
        //     'name' => 'Hardeep23',
        //     'father_name' => 'HS',
        //     'mother_name' => 'KK',
        //     'class' => 05,
        //     'gender' => 'male',
        //     'address' => 'HP',
        // ]);

        $article = Student::create([
            'name' => 'Mohit',
            'father_name' => 'HS',
            'mother_name' => 'KK',
            'class' => 05,
            'gender' => 'male',
            'address' => 'HP',
            ]);



        // return redirect()->back('Pages.test_data');
        // $data = DB::table('students')->get();

        // return view('Pages.test_data', compact('data'));

    }

    public function updateData()
    {

        // DB::table('students')->where('student_id', 1)
        //     ->update([
        //         'name' => 'Hardeep GG',
        //     ]);

        $article = Student::where('student_ID',31)->update([
                  'name' => 'Hardeep Thakur',
        ]);

        $data = DB::table('students')->get();

        return view('Pages.test_data', compact('data'));

    }

    public function dropData()
    {
        // DB::table('students')->where('student_ID', 20)->delete();

        $article = Student::where('student_ID',33)->delete();

        
        $data = DB::table('students')->get();

        return view('Pages.test_data', compact('data'));

    }

    public function appointmentData() {

        $data = DB::table('bookappointments')->get();
 
      
         return view('Pages.appointment', compact('data'));
    }

public function appointmentNewData()
{
    DB::table('bookappointments')->insert([
        'firstName' => 'HS',
        'lastName' => 'SHT',
        'email' => 'hs11@gmail.com',
        'phone' => '1234567891',
        'services' => 'SSGJS',
        'appointment' => '2026-03-25',  
    ]);

    $data = DB::table('bookappointments')->get();

    // return view('Pages.appointment', compact('data'));
      return redirect()->compact('data')->with('status', 'Post added successfully!');
}

}
