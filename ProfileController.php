<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.prpfile.create');
    }
    
    public function reate()
    {
        return redirect('admin/prpfile/create');
    }
    
    public function edit()
    {
        return view('admin.prpfile.edit');
    }
    
    public function update()
    {
        return redirect('admin/prpfile/edit');
    }
}
