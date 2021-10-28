<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return view('boards.index', ['boards' => Board::all()->sortDesc()]);
    }

    public function create()
    {
        return view('boards.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'year' => 'required',
            'price' => 'required',
            'model' => 'required',
            'appearance' => 'required'
        ]);

        $board = new Board();
        $board->name = $validation['name'];
        $board->company = $validation['company'];
        $board->year = $validation['year'];
        $board->price = $validation['price'];
        $board->model = $validation['model'];
        $board->appearance = $validation['appearance'];
        if ($request->hasFile('picture')) {
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('public/images', $fileName);
            $board->image_name = $fileName;
            $board->image_path = $path;
        }
        $board->save();

        return redirect()->route('boards.index');
    }

    public function show($id)
    {
        $board = Board::where('id', $id)->first();
        return view('boards.show', compact('board'));
    }

    public function edit($id)
    {
        $board = Board::where('id', $id)->first();
        return view('boards.edit', compact('board'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'year' => 'required',
            'price' => 'required',
            'model' => 'required',
            'appearance' => 'required'
        ]);

        $board = Board::where('id', $id)->first();
        $board->name = $validation['name'];
        $board->company = $validation['company'];
        $board->year = $validation['year'];
        $board->price = $validation['price'];
        $board->model = $validation['model'];
        $board->appearance = $validation['appearance'];
        $board->save();

        return redirect()->route('boards.show', $id);
    }

    public function destroy($id)
    {
        $board = Board::where('id', $id)->first();
        $board->delete();

        return redirect()->route('boards.index');
    }
}
