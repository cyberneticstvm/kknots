@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-md-12 db-sec-com">
                            <h2 class="db-tit">Profile settings</h2>
                            <div class="col7 fol-set-rhs form-login">
                                <!--START-->
                                {{ html()->form('POST', route('user.profile.settings.update'))->class('')->open() }}
                                <div class="ms-write-post fol-sett-sec sett-rhs-pro">
                                    <div class="foll-set-tit fol-pro-abo-ico">
                                        <h4>Profile</h4>
                                    </div>
                                    <div class="fol-sett-box">
                                        <ul>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="auth-pro-sm sett-pro-wid">
                                                        <div class="auth-pro-sm-img">
                                                            <img src="{{ asset($settings->profile_photo) }}" alt="">
                                                        </div>
                                                        <div class="auth-pro-sm-desc">
                                                            <h5>{{ Auth::user()->name }}</h5>
                                                            <p>{{ Auth::user()->plans->name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    <a href="{{ route('logout') }}" class="set-sig-out">Sign Out</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="sett-rad-left">
                                                        <h5>Profile Photo visible</h5>
                                                        <p>You can set-up who can able to view your profile photo.</p>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    <div class="sett-select-drop">
                                                        <select name="photo">
                                                            <option value="1" {{ ($settings->show_profile_photo == 1) ? 'selected' : '' }}>Visible to All</option>
                                                            <option value="0" {{ ($settings->show_profile_photo != 1) ? 'selected' : '' }}>No-more visible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="sett-rad-left">
                                                        <h5>Who can view your Address</h5>
                                                        <p>You can set-up who can able to view your Address.</p>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    <div class="sett-select-drop">
                                                        <select name="address">
                                                            <option value="1" {{ ($settings->show_address == 1) ? 'selected' : '' }}>Visible to All</option>
                                                            <option value="0" {{ ($settings->show_address != 1) ? 'selected' : '' }}>No-more visible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="sett-rad-left">
                                                        <h5>Who can view your Email</h5>
                                                        <p>You can set-up who can able to view your Email.</p>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    <div class="sett-select-drop">
                                                        <select name="email">
                                                            <option value="1" {{ ($settings->show_email == 1) ? 'selected' : '' }}>Visible to All</option>
                                                            <option value="0" {{ ($settings->show_email != 1) ? 'selected' : '' }}>No-more visible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="sett-rad-left">
                                                        <h5>Who can view your Contact Number</h5>
                                                        <p>You can set-up who can able to view your Contact Number.</p>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    <div class="sett-select-drop">
                                                        <select name="mobile">
                                                            <option value="1" {{ ($settings->show_contact_number == 1) ? 'selected' : '' }}>Visible to All</option>
                                                            <option value="0" {{ ($settings->show_contact_number != 1) ? 'selected' : '' }}>No-more visible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="sett-rad-left">
                                                        <h5>Password</h5>
                                                        <p>You can change your password here.</p>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    {{ html()->password('password')->class('form-control')->placeholder('******') }}
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sett-lef">
                                                    <div class="sett-rad-left">
                                                        <h5>Close / Cancel Account</h5>
                                                        <p>You can Cancel / Close your account here.</p>
                                                    </div>
                                                </div>
                                                <div class="sett-rig">
                                                    <a href="{{ route('user.close.account', encrypt(Auth::id())) }}" class="dlt">Cancel Account</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{ html()->submit('Update')->class('btn btn-primary btn-submit') }}
                                {{ html()->form()->close() }}
                                <!--END-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection