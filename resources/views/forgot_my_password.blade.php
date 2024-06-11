@extends('layout')

@section('title', 'Şifremi Unuttum')

@section('form')
<span style="padding-left: 55px; padding-bottom: 30px; font-size: 32px" class="padding-bottom--15"><b>Şifremi Unuttum</b></span>
<form action="{{route('forgot_my_password.post')}}" method="POST" id="stripe-login">
    @csrf
  <div class="field padding-bottom--24">
    <label for="email">Email</label>
    <input type="email" name="email">
  </div>
  <div class="field padding-bottom--24">
    <div class="grid--50-50">
      <label for="password">Şifre</label>
      </div>
      <input type="password" name="password">
    </div>
  <div class="field padding-bottom--24">
    <div class="grid--50-50">
      <label for="password2">Şifreyi Doğrula</label>
      </div>
      <input type="password" name="password2">
    </div>
      <div style="padding-right: 115px" class="reset-pass">
        <a style="color: rgba(226, 71, 71, 0.889)"  href="{{route('registration')}}">Yeni Hesap Oluştur</a><br>
      </div>
      <div class="field padding-bottom--24">
          <input style="background-color: rgba(226, 71, 71, 0.889)"  type="submit" name="submit" value="Kaydol">
          </div>
</form>
@endsection
