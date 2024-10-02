@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="col-md-12 db-sec-com db-new-pro-main">
                        <h2 class="db-tit">Admin Dashboard</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h5>Total Profiles</h5>
                    <h2 class="fw-bold">{{ $profiles->count() }}</h2>
                </div>
                <div class="col-md-3">
                    <h5>Total Male Profiles</h5>
                    <h2 class="fw-bold">{{ $profiles->where('gender', 1)->count() }}</h2>
                </div>
                <div class="col-md-3">
                    <h5>Total Female Profiles</h5>
                    <h2 class="fw-bold">{{ $profiles->where('gender', 2)->count() }}</h2>
                </div>
                <div class="col-md-3">
                    <h5>Paid Profiles</h5>
                    <h2 class="fw-bold">{{ $profiles->where('plan', '!=', 1)->count() }}</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <h5>Total Collection</h5>
                    <h2 class="fw-bold">{{ $collection->sum('amount') }}</h2>
                </div>
                <div class="col-md-3">
                    <h5>Collection Current Month</h5>
                    <h2 class="fw-bold">{{ number_format($current_month_collection, 2) }}</h2>
                </div>
                <div class="col-md-3">
                    <h5>Profiles Current Month</h5>
                    <h2 class="fw-bold">{{ $current_month_profiles }}</h2>
                </div>
                <div class="col-md-3">
                    <h5>Male Profiles Current Month</h5>
                    <h2 class="fw-bold">{{ $profiles->where('gender', 1)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count() }}</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <h5>Female Profiles Current Month</h5>
                    <h2 class="fw-bold">{{ $profiles->where('gender', 2)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count() }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection