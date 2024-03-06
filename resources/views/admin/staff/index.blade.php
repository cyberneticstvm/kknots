@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 db-sec-com db-new-pro-main">
                    <h2 class="db-tit">User / Staff Register</h2>
                </div>
                <div class="col-md-4 db-sec-com db-new-pro-main text-end">
                    <a href="{{ route('admin.staff.create') }}" class="btn btn-warning btn-sm">Create New</a>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Full Name</th>
                                    <th>Contact Number</th>
                                    <th>Role</th>
                                    <th>Referral Code</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($staffs as $key => $staff)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->mobile }}</td>
                                    <td>{{ $staff->roles->name }}</td>
                                    <td>{{ $staff->referral_code }}</td>
                                    <td>{!! $staff->status() !!}</td>
                                    <td class="text-center"><a href="{{ route('admin.staff.edit', encrypt($staff->id)) }}"><i class="fa fa-pencil text-warning"></i></a></td>
                                    <td class="text-center"><a href="{{ route('admin.staff.delete', encrypt($staff->id)) }}" class="dlt"><i class="fa fa-trash text-danger"></i></a></td>
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