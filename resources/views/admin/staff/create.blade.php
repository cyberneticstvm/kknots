@extends("base")
@section("content")
<section>
    <div class="login pro-edit-update">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('POST', route('admin.staff.save'))->class('')->open() }}
                            <div class="form-group">
                                <label class="lb req">Full Name:</label>
                                {{ html()->text('name', old('name'))->class('form-control')->placeholder('Full Name') }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
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
                                <label class="lb req">Email ID:</label>
                                {{ html()->email('email', old('email'))->class('form-control')->placeholder('Email ID') }}
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Role:</label>
                                {{ html()->select('role', $roles, old('role'))->class('form-control')->placeholder('Select') }}
                                @error('role')
                                <small class="text-danger">{{ $errors->first('role') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb">Select Partner if Role is Freelancer:</label>
                                {{ html()->select('partner_id', $partners, old('partner_id'))->class('form-control')->placeholder('Select') }}
                                @error('partner_id')
                                <small class="text-danger">{{ $errors->first('partner_id') }}</small>
                                @enderror
                            </div>
                            {{ html()->submit('Create Staff')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection