@extends("base")
@section("content")
<!-- REGISTER -->
<section>
    <div class="login pro-edit-update">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('POST', route('user.profile.update'))->class('')->open() }}
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Basic info</h4>
                                    <h1>Edit my profile</h1>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="lb">Name:</label>
                                        {{ html()->text('name', Auth::user()->name)->class('form-control')->placeholder('Full Name') }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="lb req">Gender:</label>
                                        {{ html()->select('gender', $extras->where('category', 'gender')->pluck('name', 'id'), Auth::user()->gender)->class('chosen-select')->placeholder('Select') }}
                                        @error('gender')
                                        <small class="text-danger">{{ $errors->first('gender') }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="lb req">Date of Birth:</label>
                                        {{ html()->date('dob', Auth::user()->dob->format('Y-m-d'))->class('form-control') }}
                                        @error('dob')
                                        <small class="text-danger">{{ $errors->first('dob') }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="lb">Email:</label>
                                        {{ html()->email('email', Auth::user()->email)->class('form-control')->placeholder('Email') }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="lb">Mobile Number:</label>
                                        {{ html()->text('mobile', Auth::user()->mobile)->class('form-control')->placeholder('Mobile')->maxlength('10') }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="lb">Referral Code:</label>
                                        {{ html()->text('referral_code', Auth::user()->referral_code)->class('form-control')->placeholder('Referral Code')->if( Auth::user()->referral_code != '', function($el){
                                            $el->attribute('disabled', 'true');
                                            }) 
                                        }}
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Candidate and Family Bio:</label>
                                        {{ html()->textarea('bio', $profile?->bio)->class('form-control')->placeholder('Candidate and Family Bio') }}
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Basic info</h4>
                                    <h1>Advanced bio</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">City:</label>
                                        {{ html()->select('city', $districts, $profile?->city)->class('form-select chosen-select')->placeholder('Select') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">State:</label>
                                        {{ html()->text('state', $profile?->state)->class('form-control')->placeholder('State') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Height in Cm:</label>
                                        {{ html()->number('height', $profile?->height, '1', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Weight in Kg:</label>
                                        {{ html()->number('weight', $profile?->weight, '1', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Father's name:</label>
                                        {{ html()->text('father_name', $profile?->father_name)->class('form-control')->placeholder('Father Name') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Mother's name:</label>
                                        {{ html()->text('mother_name', $profile?->mother_name)->class('form-control')->placeholder('Mother Name') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="lb">Address:</label>
                                    {{ html()->text('address', $profile?->address)->class('form-control')->placeholder('Address') }}
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Basic info</h4>
                                    <h1>Other Family info</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Father Occupation:</label>
                                        {{ html()->text('father_occupation', $profile?->father_occupation)->class('form-control')->placeholder('Father Occupation') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Mother Occupation:</label>
                                        {{ html()->text('mother_occupation', $profile?->mother_occupation)->class('form-control')->placeholder('Mother Occupation') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Number of Brothers:</label>
                                        {{ html()->number('number_of_brothers', $profile?->number_of_brothers, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Number of Sisters:</label>
                                        {{ html()->number('number_of_sisters', $profile?->number_of_sisters, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Number of Married Brothers:</label>
                                        {{ html()->number('number_of_married_brothers', $profile?->number_of_married_brothers, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Number of Married Sisters:</label>
                                        {{ html()->number('number_of_married_sisters', $profile?->number_of_married_sisters, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Contact Person Name:</label>
                                        {{ html()->text('contact_person_name', $profile?->contact_person_name)->class('form-control')->placeholder('Contact Person Name') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Contact Person Mobile:</label>
                                        {{ html()->text('contact_person_mobile', $profile?->contact_person_mobile)->class('form-control')->maxlength('10')->placeholder('Contact Person Mobile') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Relationship with Candidate:</label>
                                        {{ html()->text('relationship_with_candidate', $profile?->relationship_with_candidate)->class('form-control')->placeholder('Relationship with Candidate') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Family Financial Status:</label>
                                        {{ html()->select('finacial_status', $extras->where('category', 'finacial_level')->pluck('name', 'id'), Auth::user()->finacial_status)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Job details</h4>
                                    <h1>Job & Education</h1>
                                </div>
                                <div class="form-group">
                                    <label class="lb">Job type:</label>
                                    {{ html()->select('occupation', $occupations, $profile?->occupation)->class('form-select chosen-select')->placeholder('Select') }}
                                </div>
                                <div class="form-group">
                                    <label class="lb">Company name:</label>
                                    {{ html()->text('company_name', $profile?->company_name)->class('form-control')->placeholder('Company Name') }}
                                </div>
                                <div class="form-group">
                                    <label class="lb">Working Place:</label>
                                    {{ html()->select('work_place', $districts, $profile?->work_place)->class('form-select chosen-select')->placeholder('Select') }}
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Salary:</label>
                                        {{ html()->select('salary', $incomes, $profile?->salary)->class('form-select chosen-select')->placeholder('Select') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Job total experience:</label>
                                        {{ html()->number('total_experience', $profile?->total_experience, '0', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="lb">Education:</label>
                                    {{ html()->select('qualification', $qualifications, $profile?->qualification)->class('form-select chosen-select')->placeholder('Select') }}
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">School:</label>
                                        {{ html()->text('school', $profile?->school)->class('form-control')->placeholder('School') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">College:</label>
                                        {{ html()->text('college', $profile?->college)->class('form-control')->placeholder('College') }}
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>interests</h4>
                                    <h1>Habits</h1>
                                </div>
                                <div class="chosenini">
                                    <div class="form-group">
                                        <label class="lb">Interests:</label>
                                        {{ html()->select('interests[]', $extras->where('category', 'interest')->pluck('name', 'id'), '')->class('chosen-select')->placeholder('Select')->multiple() }}
                                    </div>
                                </div>
                                <div class="chosenini">
                                    <div class="form-group">
                                        <label class="lb">Habits:</label>
                                        {{ html()->select('habits[]', $extras->where('category', 'habit')->pluck('name', 'id'), '')->class('chosen-select')->placeholder('Select')->multiple() }}
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Prefernces</h4>
                                    <h1>Partner Preferences</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Marital Status:</label>
                                        {{ html()->select('marital_status_preference', $extras->where('category', 'marital_status_preference')->pluck('name', 'id'), $profile?->marital_status_preference)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Caste:</label>
                                        {{ html()->select('cast_preference', $casts, $profile?->cast_preference)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label class="lb">Height From:</label>
                                        {{ html()->number('number_of_brothers', $profile?->number_of_brothers, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="lb">Height To:</label>
                                        {{ html()->number('number_of_sisters', $profile?->number_of_sisters, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="lb">Age From:</label>
                                        {{ html()->number('number_of_brothers', $profile?->number_of_brothers, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label class="lb">Age To:</label>
                                        {{ html()->number('number_of_sisters', $profile?->number_of_sisters, '', '', 'any')->class('form-control')->placeholder('0') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Native Place:</label>
                                        {{ html()->select('native_place_preference', $districts, $profile?->native_place_preference)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Education:</label>
                                        {{ html()->select('education_preference', $qualifications, $profile?->education_preference)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Occupation:</label>
                                        {{ html()->select('occupation_preference', $occupations, $profile?->occupation_preference)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Working Place:</label>
                                        {{ html()->select('working_place_preference', $districts, $profile?->working_place_preference)->class('chosen-select')->placeholder('Select') }}
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            <!--PROFILE BIO-->
                            <div class="edit-pro-parti">
                                <div class="form-tit">
                                    <h4>Profile</h4>
                                    <h1>Profile Photo & Horoscope</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Profile Photo (Main):</label>
                                        {{ html()->file('profile_photo')->class('form-control') }}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="lb">Horoscope:</label>
                                        {{ html()->file('horoscope')->class('form-control') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="lb">Additional Photos <small>(Multiple selection enabled)</small></label>
                                        {{ html()->file('photos[]')->class('form-control')->multiple() }}
                                    </div>
                                </div>
                            </div>
                            <!--END PROFILE BIO-->
                            {{ html()->submit('Update')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection