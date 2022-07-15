<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Monitoring::latest()->paginate(5);

        return view('pages.monitoring.index', compact('items'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.monitoring.create');
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
            'name' => 'required',
            'client' => 'required',
            'project_leader' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'progress' => 'required',
        ]);

        Monitoring::create($request->all());

       toast('Success Input Data Monitoring','success');

        return redirect()->route('monitoring.index');
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
    public function edit(Monitoring $monitoring)
    {
        return view('pages.monitoring.edit', compact('monitoring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitoring $monitoring)
    {
        $request->validate([
            'name' => 'required',
            'client' => 'required',
            'project_leader' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'progress' => 'required',
        ]);

        $monitoring->update($request->all());

        toast('Success Update Data Monitoring','success');

        return redirect()->route('monitoring.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();
        toast('Success Delete Data Monitoring','success');
        return redirect()->route('monitoring.index');
    }
}
