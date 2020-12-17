<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studentdata;
class StudentdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
       
        
        return view('studentdata');
    }
    public function index1(){
        $student = Studentdata::all();
        
        return view('retrivestud',compact('student'));

    }
     public function index2(){
        $student = Studentdata::all();
        
        return view('feeretrive',compact('student'));

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
            'address' => 'required',
            'subject'=>'required',
            'jdate'=>'required',
            'pcno'=>'required',
            'pemail'=>'required',
            'fee' => 'required',
            'deposite'=>'required',
            'pending'=>'required',

        ]);

        $student = new Studentdata([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'cno' => $request->get('cno'),
            'address' => $request->get('address'),
            'subject' => $request->get('subject'),
               'jdate' => $request->get('jdate'),
            'pcno' => $request->get('pcno'),
            'pemail' => $request->get('pemail'),
            'fee' => $request->get('fee'),
            'deposite' => $request->get('deposite'),
             'pending' => $request->get('pending'),
                'edate' => $request->get('edate')
            
        ]);
        $student->save();
        $request->session()->flash('alert-success', 'User was successful added!');
        return redirect('student')->with('success', 'Data saved!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $student = Studentdata::find($id);
       return view('editstuddata',compact('student'));
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
        
        $student = Studentdata::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->cno= $request->cno;
        $student->address= $request->address;
        $student->subject= $request->subject;
        $student->jdate= $request->jdate;
        $student->pcno= $request->pcno;
         $student->pemail = $request->pemail;
        $student->fee= $request->fee;
        $student->deposite= $request->deposite;
        $student->pending = $request->pending;
        $student->edate= $request->edate;


        $student->update();
        return redirect('retrivestud');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Studentdata::find($id);
        $student -> delete();
        return redirect()->back();
        
            }
}
