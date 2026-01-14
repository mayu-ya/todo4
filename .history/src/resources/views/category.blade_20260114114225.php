@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="category-message">
    <div class="category-success">
        @if(session('message'))
        <div class="category-success_message">
            {{ session('message')}}
        </div>
        @endif
    </div>
    <div class="category-error">
        <div class="category-error_message">エラー</div>
    </div>
</div>

<div class="content">
    <form class="category-form" action="/categories" method="post">
        @csrf      
        <div class="category-form_item">
            <input type="text" class="category-form_item-input" name="name">
        </div>
        <div class="category-form_button">
            <button class="category-form_button-submit" type="submit">作成</button>
        </div>
    </form>

    <table class="table">
        <tr class="table-row">
            <th class="table-header">
                <div class="table-header-item">category</div>
            </th>
        </tr>
        @foreach($categories as $category)
        <tr class="table-row">
            <td class="table_item">
                <form class="table-update" action="/">
                    <div class="table-update_item">
                        <input class="table-update_item-input" type="text" value="{{ $category['name'] }}">
                    </div>
                    <div class="table-update_button">
                        <button class="table-update_button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="table_item">
                <form class="table-delete" action="/">
                    <div class="table-delete_button">
                        <button class="table-delete_button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
