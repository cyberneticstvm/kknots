@extends("base")
@section("content")
<section>
    <div class="login pro-edit-update">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('PUT', route('admin.plan.update', $plan->id))->class('')->open() }}
                            <div class="form-group">
                                <label class="lb req">Plan Name:</label>
                                {{ html()->text('name', $plan->name)->class('form-control')->placeholder('Full Name') }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Validity (In Days):</label>
                                {{ html()->number('validity', $plan->validity, '0', '', '1')->class('form-control')->placeholder('0') }}
                                @error('validity')
                                <small class="text-danger">{{ $errors->first('validity') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Price:</label>
                                {{ html()->number('price', $plan->price, '0', '', 'any')->class('form-control')->placeholder('0.00') }}
                                @error('price')
                                <small class="text-danger">{{ $errors->first('price') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Profiles Allowed:</label>
                                {{ html()->number('profiles_allowed', $plan->profiles_allowed, '0', '', '1')->class('form-control')->placeholder('0') }}
                                @error('profiles_allowed')
                                <small class="text-danger">{{ $errors->first('profiles_allowed') }}</small>
                                @enderror
                            </div>
                            {{ html()->submit('Update Plan')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection