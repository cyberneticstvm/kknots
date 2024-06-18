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
                                {{ html()->form('POST', route('user.authenticate'))->class('')->open() }}
                                <div class="form-group">
                                    <label class="lb req">Mobile Number:</label>
                                    {{ html()->text('mobile', old('mobile'))->class('form-control')->maxlength(10)->placeholder('Mobile Number') }}
                                    @error('mobile')
                                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                    @enderror
                                </div>
                                {{ html()->submit('Request Password Reset Link')->class('btn btn-primary btn-submit') }}
                                {{ html()->form()->close() }}
                                <div class="form-tit">
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