@extends('layouts.master')
@section('content')

  <form id="app-login" class="login">
      {!! csrf_field() !!}
    <p class="title">Log in</p>
    <input type="text" placeholder="Email" name="email" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password" />
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button id="send">
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  <footer></footer>
  </p>

@stop
