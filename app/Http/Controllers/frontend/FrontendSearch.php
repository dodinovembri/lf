<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Response;
use App\models\Search;
use App\models\Product;
use App\models\Headermenu;

class FrontendSearch extends Controller
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

    public function search(Request $request)
    {
        $shop_id = $request->shop_id;        
        $data['result'] = Search::where('id', $shop_id)->get();
        $data['product'] = Product::where('vendor_id', $shop_id)->get();
        $data['header_menu'] = Headermenu::where('vendor_id', $shop_id)->where('active', 1)->get();
        $data['phone'] = "+ 1235 2355 988";
        $data['email'] = "youremail@email.com";
        $data['ket'] = "3-5 Business days delivery & Free Returns";
        $data['shop_name'] = "Minishop";

        return view('home', $data);
    }


    public function destroy($id)
    {
        //
    }
}
