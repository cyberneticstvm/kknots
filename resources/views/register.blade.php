@extends("base")
@section("content")
<!-- REGISTER -->
<section>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <div class="lhs">
                        <div class="tit">
                            <h2>Now <b>Find your life partner</b> Easy and fast.</h2>
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
                                <h1>Register into our Portal</h1>
                                <p>Already a member? <a href="{{ route('login') }}">Login</a></p>
                            </div>
                            <div class="form-login">
                                @include('flash-message')
                                {{ html()->form('POST', route('user.register'))->class('')->open() }}
                                <div class="form-group">
                                    <label class="lb req">Full Name:</label>
                                    {{ html()->text('name', old('name'))->class('form-control')->placeholder('Full Name') }}
                                    @error('name')
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Date of Birth:</label>
                                    {{ html()->date('dob', old('dob') ?? date('Y-m-d'))->class('form-control') }}
                                    @error('dob')
                                    <small class="text-danger">{{ $errors->first('dob') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Gender:</label>
                                    {{ html()->select('gender', $gender, old('gender'))->class('form-control')->placeholder('Select') }}
                                    @error('gender')
                                    <small class="text-danger">{{ $errors->first('gender') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Mobile Number:</label>
                                    {{ html()->text('mobile', old('mobile'))->class('form-control')->maxlength(10)->placeholder('Mobile Number') }}
                                    @error('mobile')
                                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Profile creating for:</label>
                                    {{ html()->select('profile_for', $profile_for, old('profile_for'))->class('form-control')->placeholder('Select') }}
                                    @error('profile_for')
                                    <small class="text-danger">{{ $errors->first('profile_for') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Password:</label>
                                    {{ html()->password('password', old('password'))->class('form-control')->placeholder('******') }}
                                    @error('password')
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">Confirm Password:</label>
                                    {{ html()->password('password_confirmation', old('password_confirmation'))->class('form-control')->placeholder('******') }}
                                    @error('password_confirmation')
                                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb">Referral Code:</label>
                                    {{ html()->text('referral_code', old('referral_code'))->class('form-control')->placeholder('Referral Code') }}
                                    @error('referral_code')
                                    <small class="text-danger">{{ $errors->first('referral_code') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="lb req">How do you know about us?</label>
                                    {{ html()->select('how_to_know', $hows, old('how_to_know'))->class('form-control')->placeholder('Select') }}
                                    @error('how_to_know')
                                    <small class="text-danger">{{ $errors->first('how_to_know') }}</small>
                                    @enderror
                                </div>
                                <div class="form-group form-check border">
                                    <label class="form-check-label req">
                                        {{ html()->checkbox('terms', old('terms'))->class('form-check-input border') }} Creating
                                        an account means you're agree with our <a href="#!">Terms of Service</a>,
                                        Privacy Policy, and our default Notification Settings.
                                    </label>
                                    @error('terms')
                                    <small class="text-danger">{{ $errors->first('terms') }}</small>
                                    @enderror
                                </div>
                                {{ html()->submit('Create Account')->class('btn btn-primary btn-submit') }}
                                {{ html()->form()->close() }}
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