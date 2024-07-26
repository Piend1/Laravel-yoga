<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();

        $data = [
            "todos" => $todos
        ];
        return view("todo.index", $data);
    }

    public function destroy($id){
        $todo = Todo::where("id", $id)->first();
        $todo->delete();

        return redirect("/todo");
    }
    public function create() {
        return view("todo.tambah");
    }
    public function store(request $request){
        $todo = $request->todo;
        $keterangan = $request->keterangan;
         
    $dataTodo = New Todo ();
    $dataTodo -> todo= $todo;
    $dataTodo -> keterangan = $keterangan;
    $dataTodo -> save();

    return redirect ("/todo");
    }
    public function edit($id) {
        $todo = Todo::where("id", $id)->first();

        $data = [
            "todo" => $todo
        ];
        return view("todo.edit", $data);
    }

    public function update(Request $request, $id) {
        $todo = $request->todo;
        $keterangan = $request->keterangan;

        Todo::where("id", $id)->update([
            "todo" => $todo,
            "keterangan" => $keterangan,
        ]);

        return redirect("/todo");
    }
}
