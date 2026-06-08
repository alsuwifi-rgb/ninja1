@extends('layouts.login')
@section('content')
    <div class="login-box">
        <div class="login-box-body panel panel-default custom">

            <div class="login-logo">
                <div class="login-logo">
                    <img src="{{asset('images/logo.png')}}" width="70%" style="align-self: center">
                </div>
            </div>

            <p class="login-box-msg" style="color: white;font-size: 18px;">
                {{ trans('global.login') }}
            </p>

            @if(session('message'))
                <p class="alert alert-info" style="color: rgb(243, 204, 19)">
                    {{ session('message') }}
                </p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" name="email" class="form-control" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" class="form-control" required placeholder="{{ trans('global.login_password') }}">

                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-7"  style="padding-left: 40px;margin-top: -10px;">
                        <div class="checkbox icheck">
                            <label><input type="checkbox" name="remember" > <span style="color: white"> {{ trans('global.remember_me') }}</span></label>
                        </div>
                    </div>
                    @if(Route::has('password.request'))
                        <div class="col-xs-5">
                            <a href="{{ route('password.request') }}" class="col-6">
                                {{ trans('global.forgot_password') }}
                            </a><br>
                        </div>
                    @endif
                    <div class="col-xs-12" style="margin-top: 10px;margin-bottom: 20px;">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" >
                            {{ trans('global.login') }}
                            <i class="fa-solid fa-dungeon"></i>
                            {{--                        Crossing--}}
                        </button>
                    </div>
                </div>
            </form>


            don't have an account? <a href="#">{{ trans('global.register') }}</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset("js/pages/login.js")}}"></script>
@endsection
