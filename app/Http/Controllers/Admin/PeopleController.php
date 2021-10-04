<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\People;

class PeopleController extends Controller
{
    public function index(){
        $peoples = People::get();
        
        return view('admin.people.index',compact('peoples'));
    }

    public function store(Request $request){
        return view('people.index');
    }

    public function create(){
        return view('admin.people.create');
    }

    public function show($id){
        return view('people.show');
    }

    public function update(Request $request){
        return view('people.index');
    }

    public function edit($id){
        return view('people.edit');
    }

    public function destroy($id){
        return view('people.index');
    }
}
