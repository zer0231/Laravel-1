<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Students;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validator($student)
    {
        return Validator::make($student,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255'
        ]);
    }


    public function index()
    {
        $studentList = Students::where('status',1)->get();
        return view('student-list')->with('students',$studentList);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student-form');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        Students::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status'=>1
        ]);
            
        return redirect('/student-form/create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        return view('student-update')->with('student', $student);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validator($request->all())->validate();
        Students::where('id', $id)
            ->update([
                       'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'status' => 1
                   ]);
        return redirect('/student-list');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {//sets the status of given id to 0
        $student = Students::find($id);
        $student->status=0;
        $student->save();
        return redirect('/student-list');
        //return redirect('/student-list');
    }
}