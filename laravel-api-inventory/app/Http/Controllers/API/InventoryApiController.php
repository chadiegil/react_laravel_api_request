<?php
namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Models\Inventory;

use App\Http\Controllers\Controller;


class InventoryApiController extends Controller{



    public function index(){
        $inventories = Inventory::orderBy('price','DESC')->get();
        return response()->json($inventories,200);
    }
}
