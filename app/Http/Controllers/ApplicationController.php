<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationForm;
use App\Models\Application;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::all();
        return view("application.create",['types' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationForm $request)
    {
            $user = User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
                'phone'=> $request->phone,
                'address'=> $request->address,
                'gender'=> $request->gender
            ]);

            $user->application()->create([
                'type_id' => $request->interested_programme,
                'preferred_course' => $request->preferred_course,
                'study_centre' => $request->study_centre,
                'status' => 'Pending',
            ]);


             $application =  Application::where('user_id', $user->id)->orderBy('created_at', 'desc')->first();
            return redirect()->route('invoice',[$application->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {

        return view('invoice.index', ['application' => $application ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }

    public function appvalidate(){
        $type = Type::all();
        return view('application.validate',['types' => $type]);
    }
}
