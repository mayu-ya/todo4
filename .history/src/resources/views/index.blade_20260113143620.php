@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo-message">
    @if(session('message'))
    <div class="todo-message_header">
        {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
    <div class="todo-error-message_header">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form-todo">
            <input class=create-form-todo_input type="text" name="content">
        </div>
        <div class="create-form_button">
            <button class="create-form_button-submit" type="submit">作成</button>
        </div>
    </form>

    <table class="table">
        <tr class="table-row">
            <th class="table-title">Todo</th>
        </tr>
        @foreach($todos as $todo)
        <tr class="table-row">
            <td class="table_item">
                <form class="table-update" action="/todos/update" method="post">
                    @method('patch')
                    @csrf
                    <div class="table-todo">
                        <input type="text" class="table-update_input" name="content" value="{{ $todo['content'] }}">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}>
                    </div>
                    <div class="table-update_button">
                        <button class="table-update_button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="table_item">
                <form class="table-delete" action="/todos/delete" method="post">
                    @method('delete')
                    @csrf
                    <div class="table-delete_button">
                        <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        <button class="table-delete_button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection