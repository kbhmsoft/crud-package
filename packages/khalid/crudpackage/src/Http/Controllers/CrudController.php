<?php

namespace Khalid\CrudPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Khalid\CrudPackage\Models\Crud;
use Illuminate\Http\Request;
use Khalid\CrudPackage\Http\Requests\CrudRequest;
class CrudController extends Controller
{
    public function index()
    {
        $cruds = Crud::all();

        return view('crudpackage::index', compact('cruds'));
    }

    public function create()
    {
        return view('crudpackage::create');
    }

    public function store(CrudRequest $request)
    {
        Crud::create($request->all());

        return redirect()->route('crud.index');
    }

    public function edit($id)
    {
        $crud = Crud::findOrFail($id);

        return view('crudpackage::edit', compact('crud'));
    }

    public function update(CrudRequest $request, $id)
    {
        $crud = Crud::findOrFail($id);
        $crud->update($request->all());

        return redirect()->route('crud.index');
    }

    public function destroy($id)
    {
        Crud::destroy($id);
        
        return redirect()->route('crud.index');
    }
}
