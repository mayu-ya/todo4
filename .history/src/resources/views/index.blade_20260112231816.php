@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo-message">
    <div class="todo-message_header">Todoを作成しました</div>
</div>

<div class="content">
    <form class="create-form">
        <div class="create-form-todo">
            <input class=create-form-todo_input type="text" name="name">
        </div>
        <div class="create-form_button">
            <button class="create-form_button-submit" type="submit">作成</button>
        </div>
    </form>

    <table class="table">
        <tr class="table-row">
            <th class="table-title">Todo</th>
        </tr>
        <tr class="table-row">
            <form class="table-update">
                <th class="table-todo">
                    <input type="text" class="table-update_input" name="name" value="test">
                </th>
                <td class="table_item">
                    <div class="table-update_button">
                        <button class="table-update_button-submit" type="submit">更新</button>
                    </div>
                </td>
            </form>
            <form class="table-delete">
                <td class="table_item">
                    <div class="table-delete_button">
                        <button class="table-delete_button-submit" type="submit">削除</button>
                    </div>
                </td>
            </form>
        </tr>
        <tr class="table-row">
            <form class="table-update">
                <th class="table-todo">
                    <input type="text" class="table-update_input" name="name" value="test2">
                </th>
                <td class="table-update_item">
                    <div class="table-update_button">
                        <button class="table-update_button-submit" type="submit">更新</button>
                    </div>
                </td>
            </form>
            <form class="table-delete">
                <td class="table-delete_item">
                    <div class="table-delete_button">
                        <button class="table-delete_button-submit" type="submit">削除</button>
                    </div>
                </td>
            </form>
        </tr>
    </table>
</div>
@endsection