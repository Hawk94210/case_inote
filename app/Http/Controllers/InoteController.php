<?php

namespace App\Http\Controllers;

use App\Models\INote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InoteController extends Controller
{
    public function index()
    {
        $inotes = INote::all();
        return view('index',compact('inotes'));
    }
    
    public function showCreate()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $inote = new INote();
        $inote->name = $request->name;
        $inote->note = $request->note;
        $inote->save();
    }

    public function showEdit($id)
    {
        $inote = INote::findOrFail($id);
        return view('edit',compact('inote'));
    }

    public function update($id,Request $request)
    {   
        $inote = INote::findOrFail($id);
        $newNote = new INote();
        $newNote->name = $request->name;
        $newNote->note = $request->note;
        $newNote->save();
        $inote->delete();

        return redirect()->route('show.index');
    }

    public function destroy($id)
    {
        # code...  
        $inote = INote::findOrFail($id);
        $inote->delete(); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }
}

