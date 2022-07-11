<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\DataController;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $DataUser = User::all();
        return view('Usere.datauser',compact('DataUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    
       return view('Usere.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
       User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => $request->password,


       ]);
      //  $validatedData['password'] = bcrypt($validatedData['password']);
       return redirect('datauser');
       $validatedData['password'] = Hash::make($validatedData['password']);

User::create($validatedData);

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
        $usr = User::findorfail($id);
        return view('Usere.edituser',compact('usr'));
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
        $usr = User::findorfail($id);
        $usr->update($request->all());
        return redirect('datauser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usr = User::findorfail($id);
        $usr->delete();
        return back();
    }
}
