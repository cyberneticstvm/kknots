@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 db-sec-com db-new-pro-main">
                    <h2 class="db-tit">Plan Register</h2>
                </div>
                <div class="col-md-4 db-sec-com db-new-pro-main text-end">
                    <!--<a href="{{ route('admin.plan.create') }}" class="btn btn-warning btn-sm">Create New</a>-->
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Plan Name</th>
                                    <th>Plan Validity</th>
                                    <th>Price</th>
                                    <th>Profiles Allowed</th>
                                    <th>Edit</th>
                                    <!--<th>Delete</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($plans as $key => $plan)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->validity }} Days</td>
                                    <td>{{ $plan->price }}</td>
                                    <td>{{ $plan->profiles_allowed }}</td>
                                    <td class="text-center"><a href="{{ route('admin.plan.edit', encrypt($plan->id)) }}"><i class="fa fa-pencil text-warning"></i></a></td>
                                    <!--<td class="text-center"><a href="{{ route('admin.plan.delete', encrypt($plan->id)) }}" class="dlt"><i class="fa fa-trash text-danger"></i></a></td>-->
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