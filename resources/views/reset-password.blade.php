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
                                <h1>Reset Password</h1>
                            </div>
                            <div class="form-login">
                                {{ html()->form('POST', route('reset.password.update'))->class('')->open() }}
                                <input type="hidden" name="user_id" value="{{ encrypt($user->id) }}" />
                                <div class="form-group">
                                    <label class="lb req">Password:</label>
                                    {{ html()->password('password', '')->class('form-control')->placeholder('******') }}
                                    @error('password')
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Confirm Password:</label>
                                    {{ html()->password('password_confirmation', '')->class('form-control')->placeholder('******') }}
                                    @error('password_confirmation')
                                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                    @enderror
                                </div>
                                {{ html()->submit('Update Password')->class('btn btn-primary btn-submit') }}
                                {{ html()->form()->close() }}
                                <div class="form-tit mt-3">
                                    <p><a href="{{ route('login') }}">Login</a></p>
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