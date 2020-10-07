<?php

namespace App\Http\Controllers\Admin;

use App\Model\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $unitList = Unit::all();
        return view('admin.unit.list', compact('unitList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.unit.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //form validation
        $request->validate([
            'name' => 'required|max:50|unique:units',
        ]);

        $data = $request->all();

        if ($request->get('status')) {
            $data['status'] = "Active";
        } else {
            $data += ["status" => "Inactive"];
        }

        Unit::create($data);

        return back()->withSuccess('Unit created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit) {
        return view('admin.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit) {

        if ($request->get('status')) {
            $status = "Active";
        } else {
            $status = "Inactive";
        }
        $unit->status = $status;
        $unit->save();
        return back()->withSuccess('Unit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit) {
        //
    }

}
