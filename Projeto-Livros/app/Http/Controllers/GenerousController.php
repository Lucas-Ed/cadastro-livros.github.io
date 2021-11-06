<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Controllers\GenerousController;

class GenerousController extends Controller
{
    public function index()
    {
        return Generous::all();
    }
 
    public function show($id)
    {
        return Generous::find($id);
    }

    public function store(Request $request)
    {
        return Generous::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $generous = Generous::findOrFail($id);
        $generous->update($request->all());

        return $generous;
    }
    public function delete(Request $request, $id)
    {
        $generous = Generous::findOrFail($id);
        $generous->delete();

        return 204; // 204 No Content 
    }// //
}
///////////////////////////
