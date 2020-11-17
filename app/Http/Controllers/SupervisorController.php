<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;

class SupervisorController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->paginate(5);
  
        return view('supervisors.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);



    }

    public function edit($id_guru)
    {
        $teacher = Teacher::find($id_guru);
        return view('supervisors.edit',compact('teacher') );
        // return view('teachers.edit',compact('teacher') );
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'id_guru' => 'required',
            'nama_guru' => 'required',
            'materi' => 'required',
            'status' => 'required',
            'upload' => 'required',
            'tanggal_upload' => 'required',
        ]);
  
        $teacher->update($request->all());
  
        return redirect()->route('teachers.index')
                        ->with('success','Teacher updated successfully');
    }
  
}
