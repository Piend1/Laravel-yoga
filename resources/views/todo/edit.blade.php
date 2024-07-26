@extends('layout')

@section('content')
    <h1>Edit Todo</h1>
    
    <form action="{{ route('todo.update', $todo->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="todo">Todo</label>
            <input type="text" name="todo" id="todo" placeholder="skin" value="{{ $todo->todo }}" required>
        </div>
        <br>
        <div>
            <label for="todo">keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="keterangan skin" required>{{ $todo->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection