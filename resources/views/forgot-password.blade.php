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
                            <div class="form-login">
                                {{ html()->form('POST', route('send.pwd.reset.email'))->class('')->open() }}
                                <div class="form-group">
                                    <label class="lb req">Email Id:</label>
                                    {{ html()->email('email', old('email'))->class('form-control')->placeholder('Registered Email Id') }}
                                    @error('email')
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @enderror
                                </div>
                                {{ html()->submit('Request Password Reset Link')->class('btn btn-primary btn-submit') }}
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