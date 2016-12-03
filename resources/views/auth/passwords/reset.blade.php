@extends('layouts.main')

@section('main')
    <section class="main-content">
        <div class="row">
            <div class="span5">
                <br>
                <h4 class="title text-center"><span class="text"><strong>Reset</strong> Password</span></h4>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>

                        <div class="controls">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ $email or old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>

                        <div class="controls">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <div class="controls">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-inverse large">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
