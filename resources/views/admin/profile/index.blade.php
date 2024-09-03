@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 db-sec-com db-new-pro-main">
                    <h2 class="db-tit">Profile Register</h2>
                </div>
                <div class="col-md-4 db-sec-com db-new-pro-main text-end">
                    <a class="btn btn-info" href="{{ route('admin.profiles.export') }}">Export to Excel</a>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Edit</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Reg. Date</th>
                                    <th>Plan</th>
                                    <th>Payment</th>
                                    <th>Verified</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($profiles as $key => $profile)
                                <tr class="{!! $profile->redRow() !!}">
                                    <td>{{ $key + 1 }}</td>
                                    <td class="text-center"><a href="{{ route('user.profile.edit', encrypt($profile->id)) }}"><i class="fa fa-pencil text-warning"></i></a></td>
                                    <td>{{ $profile->name }}</td>
                                    <td>{{ $profile->genders->name }}</td>
                                    <td>{{ $profile->mobile }}</td>
                                    <td>{{ $profile->email }}</td>
                                    <td>{{ $profile->created_at->format('d.M.Y') }}</td>
                                    <td>{{ $profile->plans->name }}</td>
                                    <td><a href="{{ route('admin.payment.create', encrypt($profile->id)) }}">Pay Now</a></a></td>
                                    <td class="text-center">{!! $profile->verified() !!}</td>
                                    <td>{!! $profile->status() !!}</td>
                                    <td class="text-center"><a href="{{ route('user.close.account', encrypt($profile->id)) }}" class="dlt"><i class="fa fa-trash text-danger"></i></a></td>
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