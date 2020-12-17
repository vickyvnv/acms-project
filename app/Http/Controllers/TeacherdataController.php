<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacherdata;

class TeacherdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
   public function index()
    {
       
        
        return view('teacher');
    }
    public function index1(){
        $teacher = Teacherdata::all();
        
        return view('retriveteacher',compact('teacher'));

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $request->validate([
            'name'=>'required',
            'email'=>'required',
            'cno'=>'required',
            'scno'=>'required',
            'address' => 'required',
            'subject'=>'required',
            'experiance'=>'required',
            'batch'=>'required',
            'salary' => 'required',
            
        ]);

        $teacher = new Teacherdata([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'cno' => $request->get('cno'),
            'scno' => $request->get('scno'),
            'address' => $request->get('address'),
            'subject' => $request->get('subject'),
            'experiance' => $request->get('experiance'),
            'batch' => $request->get('batch'),
            'salary' => $request->get('salary'),
            
            
        ]);
        $teacher->save();
        $request->session()->flash('alert-success', 'User was successful added!');
        return redirect('teacherdata')->with('success', 'Data saved!');
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
       $teacher = Teacherdata::find($id);
       return view('editeachdata',compact('teacher'));
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
        
        $teacher = Teacherdata::find($id);
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        $teacher->cno= $request->cno;
        $teacher->scno= $request->scno;
        $teacher->address= $request->address;
        $teacher->subject= $request->subject;
       
        $teacher->experiance = $request->experiance;
        $teacher->batch= $request->batch;
        $teacher->salary= $request->salary;
       


        $teacher->update();
        return redirect('retriveteach');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $teacher = Teacherdata::find($id);
        $teacher -> delete();
        return redirect()->back();    }
}
