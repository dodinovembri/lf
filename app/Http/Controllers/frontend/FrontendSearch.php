<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Input;
use Response;
use App\models\Search;
use App\models\Product;
use App\models\Headermenu;
use App\models\Footer;
use App\models\SubFooter;
use App\models\ProductCategory;
use App\models\SubHeaderMenu;


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

        $sub_header_menu = Headermenu::where('vendor_id', $shop_id)->get();
        foreach ($sub_header_menu as $key => $value) {
            $data['sub_header_menu'][] = SubHeaderMenu::where('vendor_id', $shop_id)->where('menu_id', $value->id)->get();
        }
        
        $data['phone'] = "+ 1235 2355 988";
        $data['email'] = "youremail@email.com";
        $data['ket'] = "3-5 Business days delivery & Free Returns";
        $data['shop_name'] = "Minishop";
        $data['footer'] = Footer::where('vendor_id', $shop_id)->get();
        $data['product_category'] = ProductCategory::where('vendor_id', $shop_id)->get();

        $footer = Footer::where('vendor_id', $shop_id)->get();
        foreach ($footer as $key => $value) {            
            $data['sub_footer'][] = SubFooter::where('vendor_id', $shop_id)->where('footer_id', $value->id)->get();   
        }        

        
        return view('home', $data);
    }

    public function link()
    {
        return 'lallala';
    }


    public function destroy($id)
    {
        //
    }
}
