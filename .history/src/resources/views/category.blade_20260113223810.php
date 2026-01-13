@extends('layputs.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="category-message">
    <div class="category-success">
        <div class="category-success_message"></div>
    </div>
    <div class="category-error">
        <div class="category-error_message"></div>
    </div>
</div>

<div class="content">
    <form class="category-form">
        <div class="category-form_item">
            <input type="text" class="category-form_item-input" name="category">
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
        <tr class="table-row">
            <form class="table-update" action="/">
                <div class="table-update_item">
                    <input type="text" class="table-update_item-input" name="category">
                </div>
                <div class="table-update_button">
                    <button class="table-update_button-submit" type="submit">更新</button>
                </div>
            </form>
            <form class="table-delete" action="/">
                <div class="table-delete_button">
                    <button class="table-delete_button-submit" type="submit">削除</button>
                </div>
            </form>
        </tr>
    </table>
</div>
