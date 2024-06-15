@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 db-sec-com db-new-pro-main">
                    <h2 class="db-tit">Payment Register</h2>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Profile Name</th>
                                    <th>Pay. Date</th>
                                    <th>Plan</th>
                                    <th>Amount</th>
                                    <th>Pay Mode</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($payments as $key => $payment)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $payment->user->name }}</td>
                                    <td>{{ $payment->created_at->format('d.M.Y') }}</td>
                                    <td>{{ $payment->plan->name }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->pmodes->name }}</td>
                                    <td>{!! $payment->status() !!}</td>
                                    <td class="text-center"><a href="{{ route('admin.payment.edit', encrypt($payment->id)) }}"><i class="fa fa-pencil text-warning"></i></a></td>
                                    <td class="text-center"><a href="{{ route('admin.payment.delete', encrypt($payment->id)) }}" class="dlt"><i class="fa fa-trash text-danger"></i></a></td>
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