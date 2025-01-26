@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
    <h2>お問い合わせ内容確認</h2>
</div>
<?php print_r($contact['name']) ?>
<form class="form" action="/contacts" method="post">
    @csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
        <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
            <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
            <input type="gender" name="gender" value="{{ $contact['gender'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="confirm-table__text">
            <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__text">
            <input type="adress" name="adress" value="{{ $contact['adress'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">建物</th>
            <td class="confirm-table__text">
            <input type="building" name="building" value="{{ $contact['building'] }}" readonly />
        </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="confirm-table__text">
            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
        </td>
        </tr>
    </table>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
    </div>
</form>
</div>
@endsection
