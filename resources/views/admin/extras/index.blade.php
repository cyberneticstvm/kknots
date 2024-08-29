@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-8 db-sec-com db-new-pro-main">
                    <h2 class="db-tit">Master Data Management</h2>
                </div>
                <div class="inn">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('POST', route('admin.extras.update'))->class('')->open() }}
                            <input type="hidden" name="type" value="caste" />
                            <div class="form-group">
                                <label class="lb req">Caste:</label>
                                {{ html()->text('name', '')->class('form-control')->placeholder('Caste') }}
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="lb req">Religion:</label>
                                {{ html()->select('religion', $religons->pluck('name', 'id'), '')->class('form-control')->placeholder('Select') }}
                                @error('religion')
                                <small class="text-danger">{{ $errors->first('religion') }}</small>
                                @enderror
                            </div>
                            {{ html()->submit('Save Caste')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
                <div class="inn mt-5">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('POST', route('admin.extras.update'))->class('')->open() }}
                            <input type="hidden" name="type" value="subcaste" />
                            <div class="form-group">
                                <label class="lb req">Subcaste:</label>
                                {{ html()->text('name', '')->class('form-control')->placeholder('Subcaste') }}
                            </div>
                            <div class="form-group">
                                <label class="lb req">Caste:</label>
                                {{ html()->select('caste', $casts->pluck('name', 'id'), '')->class('form-control')->placeholder('Select') }}
                                @error('caste')
                                <small class="text-danger">{{ $errors->first('caste') }}</small>
                                @enderror
                            </div>
                            {{ html()->submit('Save Subcaste')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
                <div class="inn mt-5">
                    <div class="rhs">
                        <div class="form-login">
                            {{ html()->form('POST', route('admin.extras.update'))->class('')->open() }}
                            <input type="hidden" name="type" value="extra" />
                            <div class="form-group">
                                <label class="lb req">Name:</label>
                                {{ html()->text('name', '')->class('form-control')->placeholder('Name') }}
                            </div>
                            <div class="form-group">
                                <label class="lb req">Category:</label>
                                {{ html()->select('category', array('1' => 'Religion', '2' => 'Occupation', '3' => 'Qualification'), '')->class('form-control')->placeholder('Select') }}
                                @error('category')
                                <small class="text-danger">{{ $errors->first('category') }}</small>
                                @enderror
                            </div>
                            {{ html()->submit('Save')->class('btn btn-primary btn-submit') }}
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection("content")