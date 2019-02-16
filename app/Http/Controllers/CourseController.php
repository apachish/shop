<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \Maatwebsite\Excel\Excel;
class CourseController extends Controller
{

    public function import()
    {
        return view('courses.import');
    }
    public function store(Request $request)
    {
        $request->file->store('file');
        if($request->hasFile('file')){

            Excel::load($request->file('file')->getRealPath(), function ($reader) {
                dd($reader);
                foreach ($reader->toArray() as $key => $row) {
                    $data['title'] = $row['title'];
                    $data['description'] = $row['description'];

                    if(!empty($data)) {
                        DB::table('post')->insert($data);
                    }
                }
            });
        }


    }
}
