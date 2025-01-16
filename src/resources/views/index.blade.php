@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')  
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
      <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
        </div>
          <div class="form__group-content">
            <div class="form__input--first_and_last_name">
              <input type="text" name="last-name" placeholder="例:山田" data-prompt-position="topLeft" value="{{ old('last-name') }}" />
              <input type="text" name="first-name" placeholder="例:太郎"
              data-prompt-position="topLeft" value="{{ old('first-name') }}" />
            </div> 
            <div class="form__error">
             @error('first_and_last_name')
               {{ $message }}
             @enderror
            </div>          
          </div>
    </div>      
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
            <label><input type="radio" name="gender" value="男性" checked>男性</label>
            <label><input type="radio" name="gender" value="女性" />女性</label>
            <label><input type="radio" name="gender" value="その他" />その他</label>
            </div>
            <div class="form__error">
              @errow('gender')
              {{ $message }}
              @enderror
            </div>           
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--email">
              <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
          </div>         
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--tel">
              <input type="text" name="tel" placeholder="080" pattern="[0-9]{3}" value="{{ old('tel') }}" />
              <input type="text" name="tel" placeholder="1234" pattern="[0-9]{4}" value="{{ old('tel') }}" />
              <input type="text" name="tel" placeholder="5678" pattern="[0-9]{4}" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--add">
              <input type="text" name="add" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('add') }}" />
            </div>
            <div class="form__error">
              @error('add')
              {{ $message }}
              @enderror
            </div>          
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--building">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>         
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select type="select" name="select"> 
              <option value="0" disabled selected>選択して下さい</option>
              <option value="1">商品のお届けについて</option>
              <option value="2">商品の交換について</option>
              <option value="3">商品トラブル</option>
              <option value="4">ショップへの問い合わせ</option>
              <option value="5">その他</option>
              </select>              
            </div> 
            <div class="form__error">
             @error('select') 
              {{ $message }} 
             @enderror
            </div>          
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>  
            <div class="form__error">
             @error('name')
              {{ $message }}
             @enderror
            </div>          
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>

@endsection
