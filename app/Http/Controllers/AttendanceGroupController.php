<?php

namespace App\Http\Controllers;

use App\Models\AttendanceGroup;
use App\Http\Requests\StoreAttendanceGroupRequest;
use App\Http\Requests\UpdateAttendanceGroupRequest;
use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancegroups = AttendanceGroup::all();
        return view('AttendanceGroup.index',['attendancegroups' => $attendancegroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = AttendanceGroup::all();

        return view('AttendanceGroups.create', ['select_values' => $select_values]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendancegroup = new AttendanceGroup();
        $attendancegroup->name = $request->attendancegroup_name;
        $attendancegroup->description = $request->attendancegroup_description;
        $attendancegroup->difficulty = $request->attendancegroup_difficulty;
        $attendancegroup->schoolnew_id = $request->attendancegroup_schoolnew_id;
        $attendancegroup->save();

        return redirect()->route('AttendanceGroups.index');
    }

    /**vngnhmfhcmgh
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendanceGroup)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendanceGroup)
    {
        return view('AttendanceGroups.edit', ['attendanceGroup'=>$attendanceGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendanceGroupRequest  $request
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendanceGroupRequest $request, AttendanceGroup $attendanceGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendanceGroup)
    {
        //
    }
}
