<?php

namespace App\Http\Controllers\Admin;

#controller
use App\Http\Controllers\Controller;

#model
use App\Model\Admin\ProductModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ChargesController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    protected function call_description($description) {

        $call_query = ProductModel::where( function($query) use($description) {
            $query->from('products')->where([['products.description',$description]]);  
                })->get();
    
    }

    public function index($description=null) {

        $this->call_description($description)
        return dd('sdsdsd');
    }
}
