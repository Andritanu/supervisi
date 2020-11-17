<?php
  
namespace App\Http\Controllers;
  
use App\Kurikulum;
use Illuminate\Http\Request;
  
class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulums = Kurikulum::latest()->paginate(5);
  
        return view('kurikulums.index',compact('kurikulums'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurikulums.create');
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
            'nama_guru' => 'required',
            'mapel' => 'required',
            'tanggal_diperiksa' => 'required',
        ]);
  
        Kurikulum::create($request->all());
   
        return redirect()->route('kurikulums.index')
                        ->with('success',' created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(Kurikulum $kurikulum)
    {
        return view('kurikulums.show',compact('kurikulum'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurikulum $kurikulum)
    {
        return view('kurikulums.edit',compact('kurikulum'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        $request->validate([
            'nama_guru' => 'required',
            'mapel' => 'required',
            'tanggal_diperiksa' => 'required',
        ]);
  
        $kurikulum->update($request->all());
  
        return redirect()->route('kurikulums.index')
                        ->with('success','KUrikulum updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurikulum $kurikulum)
    {
        $kurikulum->delete();
  
        return redirect()->route('kurikulums.index')
                        ->with('success','Kurikulum deleted successfully');
    }
}