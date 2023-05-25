<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    public function index()
    {
        $all_data = Client::orderBy('id','asc')->get();
        return view('admin.client_show', compact('all_data'));
    }

    public function add()
    {
        return view('admin.client_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Client();

        $ext = $request->file('photo')->extension();
        $final_name = 'client_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->url = $request->url;
        $obj->save();

        return redirect()->route('admin_client_show')->with('success', 'Data is inserted successfully.');
    }
}
