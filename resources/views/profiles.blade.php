@extends("base")
@section("content")
<!-- SUB-HEADING -->
<section>
    <div class="all-pro-head">
        <div class="container">
            <div class="row">
                <h1>Lakhs of Happy Marriages</h1>
                <a href="{{ route('register') }}">Join now for Free <i class="fa fa-handshake-o" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!--FILTER ON MOBILE VIEW-->
    <div class="fil-mob fil-mob-act">
        <h4>Profile filters <i class="fa fa-filter" aria-hidden="true"></i> </h4>
    </div>
</section>
<!-- END -->
<!-- START -->
<section>
    <div class="all-weddpro all-jobs all-serexp chosenini">
        <div class="container">
            <div class="row">

                <div class="col-md-3 fil-mob-view">
                    <span class="filter-clo">+</span>
                    <!-- START -->
                    <form method="post" action="{{ route('search.profile') }}">
                        @csrf
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-search" aria-hidden="true"></i> I'm looking for</h4>
                            <div class="form-group">
                                <select class="chosen-select" name="gender">
                                    <option value="">I'm looking for</option>
                                    @forelse($extras->where('category', 'gender') as $key => $gender)
                                    <option value="{{ $gender->id }}" {{ ($inputs[0] == $gender->id) ? 'selected' : '' }}>{{ $gender->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-clock-o" aria-hidden="true"></i>Age</h4>
                            <div class="form-group">
                                <select class="chosen-select" name="age">
                                    <option value="">Select age</option>
                                    @forelse($extras->where('category', 'agegroup') as $key => $age)
                                    <option value="{{ $age->id }}" {{ ($inputs[1] == $age->id) ? 'selected' : '' }}>{{ $age->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-bell-o" aria-hidden="true"></i>Select Religion</h4>
                            <div class="form-group">
                                <select class="chosen-select" name="religion">
                                    <option>Religion</option>
                                    @forelse($religions as $key => $rel)
                                    <option value="{{ $rel->id }}" {{ ($inputs[2] == $rel->id) ? 'selected' : '' }}>{{ $rel->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- START -->
                        <div class="filt-com lhs-cate">
                            <h4><i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
                            <div class="form-group">
                                <select class="chosen-select" name="location">
                                    @forelse($states as $key => $state)
                                    <option value="{{ $state->id }}" {{ ($inputs[3] == $state->id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <!-- END -->
                        <div class="text-center"><input type="submit" class="cta-3 btn-submit" value="Search"></div>
                    </form>
                    <!-- START -->
                    <div class="filt-com filt-send-query mt-5">
                        <div class="send-query">
                            <h5>What are you looking for?</h5>
                            <p>We will help you to arrage the best match to you.</p>
                            <a href="#!" data-toggle="modal" data-target="#expfrm">Send your queries</a>
                        </div>
                    </div>
                    <!-- END -->
                </div>
                <div class="col-md-9">
                    <div class="short-all">
                        <div class="short-lhs">
                            Showing <b>{{ $profiles->count() }}</b> profiles
                        </div>
                        <div class="short-rhs">
                            <ul>
                                <li>
                                    Sort by:
                                </li>
                                <li>
                                    <div class="form-group">
                                        <select class="chosen-select">
                                            <option value="">Most relative</option>
                                            <option value="Men">Date listed: Newest</option>
                                            <option value="Men">Date listed: Oldest</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="sort-grid sort-grid-1">
                                        <i class="fa fa-th-large" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="sort-grid sort-grid-2 act">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-list-sh">
                        <ul>
                            @forelse($profiles as $key => $profile)
                            <li>
                                <div class="all-pro-box user-avil-onli" data-useravil="avilyes" data-aviltxt="Available online">
                                    <!--PROFILE IMAGE-->
                                    <div class="pro-img">
                                        <a href="profile-details.html">
                                            <img src="{{ asset('/assets/images/profiles/4.jpg') }}" alt="">
                                        </a>
                                        <div class="pro-ave" title="User currently available">
                                            <span class="pro-ave-yes"></span>
                                        </div>
                                        <div class="pro-avl-status">
                                            <h5>Last Active On: </h5>
                                        </div>
                                    </div>
                                    <!--END PROFILE IMAGE-->

                                    <!--PROFILE NAME-->
                                    <div class="pro-detail">
                                        <h4><a href="profile-details.html">{{ $profile->name }}</a></h4>
                                        <div class="pro-bio">
                                            <span>{{ $profile?->settings?->qualifications?->name }}</span>
                                            <span>{{ $profile?->settings?->occupations?->name }}</span>
                                            <span>{{ $profile?->age() }} Years old</span>
                                            <span>Height: {{ $profile?->settings?->height}} Cms</span>
                                        </div>
                                        <div class="links">
                                            <a href="{{ route('index') }}">More detaiils</a>
                                        </div>
                                    </div>
                                    <!--END PROFILE NAME-->
                                    <!--SAVE-->
                                    <span class="enq-sav" data-toggle="tooltip" title="Click to save this profile."><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                    <!--END SAVE-->
                                </div>
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection