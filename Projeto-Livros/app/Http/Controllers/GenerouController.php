<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenerouTable;

class GenerouController extends Controller
{
    public function index()
    {
        return GenerouTable::all();
    }
 
    public function show($id)
    {
        return GenerouTable::find($id);
    }

    public function store(Request $request)
    {
        return GenerouTable::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $generou = GenerouTable::findOrFail($id);
        $generou->update($request->all());

        return $generou;
    }
    public function delete(Request $request, $id)
    {
        $generou = GenerouTable::findOrFail($id);
        $generou->delete();

        return 204; // 204 No Content 
    }// //
}
///////////////////////////

