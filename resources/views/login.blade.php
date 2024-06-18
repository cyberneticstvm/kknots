@extends("base")
@section("content")
<!-- LOGIN -->
<section>
    <div class="login">
        <div class="container">
            <div class="row">

                <div class="inn">
                    <div class="lhs">
                        <div class="tit">
                            <h2>Now <b>Find <br> your life partner</b> Easy and fast.</h2>
                        </div>
                        <div class="im">
                            <img src="images/login-couple.png" alt="">
                        </div>
                        <div class="log-bg">&nbsp;</div>
                    </div>
                    <div class="rhs">
                        <div>
                            <div class="form-tit">
                                <h4>Start for free</h4>
                                <h1>Sign in to Matrimony</h1>
                                <p>Not a member? <a href="{{ route('register') }}">Sign up now</a></p>
                            </div>
                            <div class="form-login">
                                {{ html()->form('POST', route('user.authenticate'))->class('')->open() }}
                                <div class="form-group">
                                    <label class="lb req">Mobile Number:</label>
                                    {{ html()->text('mobile', old('mobile'))->class('form-control')->maxlength(10)->placeholder('Mobile Number') }}
                                    @error('mobile')
                                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Password:</label>
                                    {{ html()->password('password', old('password'))->class('form-control')->placeholder('******') }}
                                    @error('password')
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        {{ html()->checkbox('remember', old('remember'))->class('form-check-input') }} Remember me
                                    </label>
                                </div>
                                {{ html()->submit('Sign In')->class('btn btn-primary btn-submit') }}
                                {{ html()->form()->close() }}
                                <div class="form-tit mt-3">
                                    <p><a href="{{ route('forgot.password') }}">Forgot Password?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection