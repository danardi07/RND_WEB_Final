
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('admin.layanan.index');
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        // logic store
    }

    public function edit($id)
    {
        return view('admin.layanan.edit');
    }

    public function update(Request $request, $id)
    {
        // logic update
    }

    public function destroy($id)
    {
        // logic delete
    }
}
