<?php

namespace App\Http\Controllers;

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
        $data = Student::all();
        // dd($data);
        // return $data;
        return view('Pages.test_data', compact('data'));

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
        $data = DB::table('students')->get();

        return view('Pages.test_data', compact('data'));

    }

    public function updateData()
    {

        DB::table('students')->where('student_id', 1)
            ->update([
                'name' => 'Hardeep GG',
            ]);

        $data = DB::table('students')->get();

        return view('Pages.test_data', compact('data'));

    }

    public function dropData()
    {
        DB::table('students')->where('student_ID', 20)->delete();

        $data = DB::table('students')->get();

        return view('Pages.test_data', compact('data'));

    }


}
