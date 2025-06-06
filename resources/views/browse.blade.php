@extends("base")
@section("content")
<!-- START -->
<section>
    <div class="inn-ban">
        <div class="container">
            <div class="row">
                <h1>Browse Profile</h1>
                <p>Most Trusted and premium Matrimony Service in India.</p>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="wedd-gall-pg-v1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ban-search chosenini">
                        <form method="post" action="{{ route('search.profile') }}">
                            @csrf
                            <ul>
                                <li class="sr-look">
                                    <div class="form-group">
                                        <label>I'm looking for</label>
                                        <select class="chosen-select" name="gender">
                                            <option value="">I'm looking for</option>
                                            @forelse($extras->where('category', 'gender') as $key => $gender)
                                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </li>
                                <li class="sr-age">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <select class="chosen-select" name="age">
                                            <option value="">Age</option>
                                            @forelse($extras->where('category', 'agegroup') as $key => $age)
                                            <option value="{{ $age->id }}">{{ $age->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </li>
                                <li class="sr-reli">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <select class="chosen-select" name="religion">
                                            <option>Religion</option>
                                            @forelse($religions as $key => $rel)
                                            <option value="{{ $rel->id }}">{{ $rel->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </li>
                                <li class="sr-cit">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="chosen-select" name="location">
                                            <option>Location</option>
                                            @forelse($states as $key => $state)
                                            <option value="{{ $state->id }}" {{ ($states->where('default', 'true')->first()->id == $state->id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </li>
                                <li class="sr-btn">
                                    <input type="submit" class="btn-submit" value="Search">
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection