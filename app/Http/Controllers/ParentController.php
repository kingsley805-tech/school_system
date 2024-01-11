<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Myparent;
// use App\Models\Classroom;
// use App\Models\Teacher;
// use App\Models\Routine;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // error_log("Here");
            $parent = Myparent::with(['students:myparent_id'])->get();

            $data = Auth::user();
            // return $parent;
            return view('Admin.Administrator.parent')->with(['data' => $data, 'parents' => $parent]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            var_dump($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $request->validate([
                'FatherName' => 'required',
                'FatherContact' => 'required',
                'FatherOccupation' => 'required',
                'MotherName' => 'required',
                'MotherContact' => 'required',
                'MotherOccupation' => 'required',
                'Address' => 'required'
            ]);

            $parent_code = "P-".mt_rand(1000000, 9999999).mt_rand(100, 999);

            $parent = new Myparent([
                'FatherName' => $request->FatherName,
                'FatherContact' => $request->FatherContact,
                'FatherOccupation' => $request->FatherOccupation,
                'MotherName' => $request->MotherName,
                'MotherContact' => $request->MotherContact,
                'MotherOccupation' => $request->MotherOccupation,
                'Address' => $request->Address,
                'ParentCode' => $parent_code
            ]);

            $parent->save();
            return back()->with('success', 'Parent successfully created and parent code: '.$parent_code);
        } catch (\Exception  $e) {
            return back()->with('fail', $e->getMessage());
        }

    }

    public function showParentPage() {
        $data = Auth::user();

        return view('Admin.Administrator.parent-create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
