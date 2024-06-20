@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2 class="db-tit">My Profile</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="fol-sett-box">
                        <ul>
                            <li>
                                <div class="sett-lef">
                                    <div class="auth-pro-sm sett-pro-wid">
                                        <div class="auth-pro-sm-img">
                                            <img src="{{ $user->settings->profile_photo ? asset($user->settings->profile_photo) : asset('/assets/images/profiles/1.svg') }}" alt="">
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ms-write-post fol-sett-sec sett-rhs-acc">
                        <div class="foll-set-tit fol-pro-abo-ico">
                            <h4>Account</h4>
                        </div>
                        <div class="fol-sett-box sett-acc-view sett-two-tab">
                            <ul>
                                <li>
                                    <div>Full name</div>
                                    <div>{{ $user->name }}</div>
                                </li>
                                <li>
                                    <div>Mobile</div>
                                    <div>{{ $user->mobile }}</div>
                                </li>
                                <li>
                                    <div>Email id</div>
                                    <div>{{ $user->email }}</div>
                                </li>
                                <li>
                                    <div>Profile type</div>
                                    <div>{{ $user->plans->name }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="sett-acc-edit">
                            <form class="form-com sett-pro-form">
                                <ul>
                                    <li>
                                        <div class="fm-lab">Full name</div>
                                        <div class="fm-fie"><input type="text" value="vijaya kumar"></div>
                                    </li>
                                    <li>
                                        <div class="fm-lab">Email id</div>
                                        <div class="fm-fie"><input type="text" value="vijaykumar@gmail.com"></div>
                                    </li>
                                    <li>
                                        <div class="fm-lab">Password</div>
                                        <div class="fm-fie"><input type="password" value="dfght3d34"></div>
                                    </li>
                                    <li>
                                        <div class="fm-lab">Confirm password</div>
                                        <div class="fm-fie"><input type="password" value="asg235sf"></div>
                                    </li>
                                    <li>
                                        <div class="fm-lab">Profile type</div>
                                        <div class="fm-fie">
                                            <select>
                                                <option value="volvo">General</option>
                                                <option value="opel">Bloger</option>
                                                <option value="saab">Business</option>
                                                <option value="saab">Marketer</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li><input type="submit" value="Update" class=""><input type="reset" value="Cancel" class="sett-acc-edi-can"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection