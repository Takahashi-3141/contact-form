@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
</div>
<form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="name" placeholder="鈴木" value="{{ old('name') }}" />

        </div>
        <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
    </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">性別
        </span>
        <span class="form__label--required">必須</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--radio">
            <input type="radio" name="gender" value="男性">男性
            <input type="radio" name="gender" value="女性">女性
            <input type="radio" name="gender" value="another">その他
        </div>
        <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
        </div>
    </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
    </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
        </div>
        <div class="form__error">
            @error('tel')
            {{ $message }}
            @enderror
        </div>
    </div>
    </div><div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">住所
        </span>
        <span class="form__label--required">必須</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="adress" name="adress" placeholder="東京都渋谷区千駄ヶ谷123" value="{{ old('adress') }}" />
        </div>
        <div class="form__error">
            @error('adress')
            {{ $message }}
            @enderror
        </div>
    </div>
    </div>
    </div><div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">建物
        </span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="building" name="building" placeholder="千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
        <div class="form__error">
            @error('building')
            {{ $message }}
            @enderror
        </div>
    </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--textarea">
            <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
        </div>
    </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
    </div>
</form>
</div>
@endsection

