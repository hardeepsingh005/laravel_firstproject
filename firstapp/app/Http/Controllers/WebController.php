<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
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

    public function career() 
    {
    return view('Pages.career');
    }

    public function updateTable()
    {
        return view('Pages.update_table');
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



public function appointmentNewData(Request $request)

{

    //   return $request->all();
        DB::table('bookappointments')->insert([
        'firstName' => $request->firstName,
        'lastName' => $request->lastName,
        'email' => $request->email,
        'phone' => $request->phone,
        'services' => $request->services,
        'appointment' => $request->appointment,  
    ]);

    // $data = DB::table('bookappointments')->get();

    // return view('Pages.appointment');
            //  return view('Pages.appointment', compact('data'));

    return redirect()->back();
}

// career 

public function career_data()

{
    $data = DB::table('careers')->get();
    return view('Pages.data_career', compact('data'));
}

     public function devData() 

    {
            $data = DB::table('dev_data')->get();

            return view('Pages.career',  compact('data'));


    }

    public function devStore(Request $request, $id)
    {
        //  return $request->all(); 
       $data = DB::table('dev_data')->where('id', $id)->first();

        return view('Pages.update_table', compact('data'));
    }
   
    // update table data 
    public function dataUpdateTable(Request $request, $id){
    {
          DB::table('dev_data')->where('id', $id)->update([

            'name' => $request->name,
            'designation' => $request->designation,
            'department' => $request->department,
            'location' => $request->location,
            'date' => $request->date,
            //  $file->image,
            'status' => $request->status,
        ]);
              return redirect()->back();
    }
}

// delete data 

public function drop_table_data(Request $request, $id)
{
    
//  return $request->all();

// dd($id);

             DB::table('dev_data')->where('id', $id)->delete();

            // $data = DB::table('dev_data')->get();

            return redirect()->back();

            // return view('Pages.career');
}



}











