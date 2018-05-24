<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $details = Detail::find(Auth::user()->id);

        return view('pages.account', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createdetails');
    }


    public function edit($id)
    {

        return view('pages.editdetails');
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'age' => 'required',
            'weight' => 'required'
        ]);

        $data = Detail::find($id);

        $data->user_id = $id;
        $data->age = $request->get('age');
        $data->weight = $request->get('weight');

        $data->save();

        return view('pages.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'age' => 'required',
            'weight' => 'required'
        ]);

        $user_id = 0;
        $user_id = Auth::user()->id;
        $user_id = (string)$user_id;

//        $data =  new Detail ([
//            'user_id' => $user_id,
//            'age' => $request->get('age'),
//            'weight' => $request->get('weight')
//        ]);

        $data = new Detail;
        $data->user_id = $user_id;
        $data->age = $request->get('age');
        $data->weight = $request->get('weight');

        $data->save();

        return view('pages.account');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $details = Detail::find($id);

        return view('pages.account')->with('details', $details);

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
