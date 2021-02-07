@extends('layouts.frontend', ['activePage' => 'attributes-management', 'titlePage' => __('Attributes Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('cm3b.attributes.store') }}" autocomplete="off" class="form-horizontal">
        @csrf
        @method('post')

        <div class="card ">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Add Attribute') }}</h4>
                <a href="{{ route('cm3b.attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Hungry Time') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('hungry_time') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('hungry_time') ? ' is-invalid' : '' }}" name="hungry_time" id="input-hungry_time" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('hungry_time'))
                                            <span id="hungry_time-error" class="error text-danger" for="input-hungry_time">{{ $errors->first('hungry_time') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Timer') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('timer') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('timer') ? ' is-invalid' : '' }}" name="timer" id="input-timer" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('timer'))
                                            <span id="timer-error" class="error text-danger" for="input-timer">{{ $errors->first('timer') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Dispenser Start Freq.') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('dispenser_start_freq') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('dispenser_start_freq') ? ' is-invalid' : '' }}" name="dispenser_start_freq" id="input-dispenser_start_freq" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('dispenser_start_freq'))
                                            <span id="dispenser_start_freq-error" class="error text-danger" for="input-dispenser_start_freq">{{ $errors->first('dispenser_start_freq') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Dispenser End Freq.') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('dispenser_end_freq') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('dispenser_end_freq') ? ' is-invalid' : '' }}" name="dispenser_end_freq" id="input-dispenser_end_freq" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('dispenser_end_freq'))
                                            <span id="dispenser_end_freq-error" class="error text-danger" for="input-dispenser_end_freq">{{ $errors->first('dispenser_end_freq') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor Start Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor_start_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor_start_speed') ? ' is-invalid' : '' }}" name="conveyor_start_speed" id="input-conveyor_start_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor_start_speed'))
                                            <span id="conveyor_start_speed-error" class="error text-danger" for="input-conveyor_start_speed">{{ $errors->first('conveyor_start_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor End Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor_end_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor_end_speed') ? ' is-invalid' : '' }}" name="conveyor_end_speed" id="input-conveyor_end_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor_end_speed'))
                                            <span id="conveyor_end_speed-error" class="error text-danger" for="input-conveyor_end_speed">{{ $errors->first('conveyor_end_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Trash Can Size') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('trash_can_size') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('trash_can_size') ? ' is-invalid' : '' }}" name="trash_can_size" id="input-trash_can_size" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('trash_can_size'))
                                            <span id="trash_can_size-error" class="error text-danger" for="input-trash_can_size">{{ $errors->first('trash_can_size') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Starting Happiness') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('starting_happiness') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('starting_happiness') ? ' is-invalid' : '' }}" name="starting_happiness" id="input-starting_happiness" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('starting_happiness'))
                                            <span id="starting_happiness-error" class="error text-danger" for="input-starting_happiness">{{ $errors->first('starting_happiness') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_score') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_score') ? ' is-invalid' : '' }}" name="grade_score" id="input-grade_score" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('grade_score'))
                                            <span id="grade_score-error" class="error text-danger" for="input-grade_score">{{ $errors->first('grade_score') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Bad food multiplier') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('bad_food_multi') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('bad_food_multi') ? ' is-invalid' : '' }}" name="bad_food_multi" id="input-bad_food_multi" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('bad_food_multi'))
                                            <span id="bad_food_multi-error" class="error text-danger" for="input-bad_food_multi">{{ $errors->first('bad_food_multi') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Attribute') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection

@push('script')
<script>
const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    data:{
        drawer: false,
        proecssing: false,
    },
    filters: {},
    methods:{},
    mounted(){
        // this.getAttributes();
    },
})
</script>
@endpush
