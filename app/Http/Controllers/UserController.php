<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 08/01/2019
 * Time: 15:51
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Index";
    }

    public function create(){
        return "Create";
    }

    public function store(Request $request){

        return "Store".$request->input('text');
    }

    public function show($id, $name){
        return view("test")->with(compact(['id', 'name']));
    }

    public function update(Request $request, $id){
        return "Update". $id . $request->input('text');
    }

    public function delete(){
        return "Delete";
    }
}
