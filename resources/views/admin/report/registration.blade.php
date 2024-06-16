@extends("base")
@section("content")
<section>
    <div class="login pro-edit-update">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('POST', route('admin.report.registration.fetch'))->class('')->open() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="lb req">From Date:</label>
                                        {{ html()->date('from_date', old('from_date') ?? $inputs[0])->class('form-control') }}
                                        @error('from_date')
                                        <small class="text-danger">{{ $errors->first('from_date') }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="lb req">To Date:</label>
                                        {{ html()->date('to_date', old('to_date') ?? $inputs[1])->class('form-control') }}
                                        @error('to_date')
                                        <small class="text-danger">{{ $errors->first('to_date') }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="lb">Plan:</label>
                                        {{ html()->select('plan', $plans, old('plan') ?? $inputs[2])->class('form-control')->placeholder('All') }}
                                    </div>
                                </div>
                            </div>
                            {{ html()->submit('Fetch')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-8 db-sec-com db-new-pro-main">
                    <h2 class="db-tit">Report Registration</h2>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Full Name</th>
                                    <th>Contact Number</th>
                                    <th>Referral Code</th>
                                    <th>Reg Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->referral_code }}</td>
                                    <td>{{ $item->created_at->format('d.M.Y') }}</td>
                                    <td>{!! $item->status() !!}</td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection