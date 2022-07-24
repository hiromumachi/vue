@extends('layouts.app')
<!--ユーザー新規登録完了後の遷移画面！メールの送付案内およびログインへの誘導-->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('登録完了') }}</div>
                  <div class="message">
                    <h3>登録が完了致しました。</h2><br>
                    <p>パスワードをメールアドレスに送信しておりますので</p>
                    <p>下記よりログインください。</p>
                    <p>※メールが届くまで2～3分かかることがございます。ご了承ください。</p>
                    <button class="login_btn" onclick="location.href='login'">ログイン</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
  .message{
    text-align:center;
    margin:30px 0px;
  }
  .login_btn{
    /*ログインボタンのCSS*/
    color: #000;
    background-color: #fff100;
    border-bottom: 5px solid #ccc100;
    font-size:200%;
  }
  .login_btn:hover {
    /*ログインボタンにカーソルが乗った時のCSS*/
    margin-top: 3px;
    color:red;
    background: # fff20a;
    border-bottom: 2px solid #ccc100;
}
</style> 