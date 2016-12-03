@extends('layouts.main')

<!-- Main Content -->
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

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>

                        <div class="controls">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-inverse large">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
