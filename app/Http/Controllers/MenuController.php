<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Sales;
use App\Sales_Detail;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        //
        $data = Customer::all();
        $total = 0;
        return view('sql_1', compact('data', 'total'));
    }
    public function index2()
    {
        //
        return view('sql_2');
    }
    public function index2filter(Request $request)
    {
        //
        $month = $request->get('month');
        $hasils = Sales::whereMonth('date', '=', $month)->get();
        return view('sql_filter', compact('hasils'));
    }
    public function index3()
    {
        //
        $data = Sales_Detail::orderBy('qty', 'desc')->take(10)->get();
        return view('sql_3', compact('data'));
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
