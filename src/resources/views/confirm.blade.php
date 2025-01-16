@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Confirm</h2>
      </div>

  <main>    
      <form class="form" action="/content" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__first_and_last_name">
                <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__radio">
                <?php
                   echo $_POST["radio"]
                ?>
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__email">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__tel">
                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
              </td>

            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__add">
                <input type="add" name="add" value="{{ $contact['add'] }}" readonly />
              </td>
            </tr>

            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__building">
                <input type="building" name="building" value="{{ $contact['building'] }}" readonly />
              </td>
            </tr>

            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__select">
               <select type="select" name="select"> 
                <?php
                   echo $_POST["select"]
                ?>
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__textarea">
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
  </main>
</body>

</html>
@endsection