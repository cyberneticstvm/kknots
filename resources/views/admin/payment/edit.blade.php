@extends("base")
@section("content")
<section>
    <div class="login pro-edit-update">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('PUT', route('admin.payment.update', $payment->id))->class('')->open() }}
                            <input type="hidden" name="user_id" value="{{ encrypt($payment->user_id) }}">
                            <input type="hidden" name="profile_id" value="{{ encrypt($payment->profile_id) }}">
                            <div class="form-group">
                                <label class="lb req">Profile Name:</label>
                                {{ html()->text('profile_name', $payment->user->name)->class('form-control')->placeholder('Profile Name') }}
                                @error('profile_name')
                                <small class="text-danger">{{ $errors->first('profile_name') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Amount:</label>
                                {{ html()->number('amount', $payment->amount, '1', '', 'any')->class('form-control')->placeholder('0.00') }}
                                @error('amount')
                                <small class="text-danger">{{ $errors->first('amount') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Payment Mode:</label>
                                {{ html()->select('payment_mode', $pmodes, $payment->payment_mode)->class('form-control')->placeholder('Select') }}
                                @error('payment_mode')
                                <small class="text-danger">{{ $errors->first('payment_mode') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Plan:</label>
                                {{ html()->select('plan_id', $plans->pluck('name', 'id'), $payment->plan_id)->class('form-control')->placeholder('Select') }}
                                @error('plan_id')
                                <small class="text-danger">{{ $errors->first('plan_id') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Notes / Remarks:</label>
                                {{ html()->textarea('remarks', $payment->remarks)->class('form-control')->placeholder('Notes / Remarks') }}
                            </div>
                            {{ html()->submit('Update Payment')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection