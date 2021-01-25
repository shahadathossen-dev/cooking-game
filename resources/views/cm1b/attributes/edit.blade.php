@extends('layouts.frontend', ['activePage' => 'ingredient-management', 'titlePage' => __('Ingredient Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('cm1b.attributes.update', $attribute) }}" autocomplete="off" class="form-horizontal container">
        @csrf
        @method('put')

        <div class="card">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Edit Ingredient') }}</h4>
                <a href="{{ route('cm1b.attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Hungry Time') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('hungry_time') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('hungry_time') ? ' is-invalid' : '' }}" value="{{$attribute->hungry_time}}" name="hungry_time" id="input-hungry_time" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
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
                                        <input class="form-control{{ $errors->has('timer') ? ' is-invalid' : '' }}" value="{{$attribute->timer}}" name="timer" id="input-timer" type="number" placeholder="{{ __('10') }}" required />
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
                                        <input class="form-control{{ $errors->has('dispenser_start_freq') ? ' is-invalid' : '' }}" value="{{$attribute->dispenser_start_freq}}" name="dispenser_start_freq" id="input-dispenser_start_freq" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
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
                                        <input class="form-control{{ $errors->has('dispenser_end_freq') ? ' is-invalid' : '' }}" value="{{$attribute->dispenser_end_freq}}" name="dispenser_end_freq" id="input-dispenser_end_freq" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
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
                                        <input class="form-control{{ $errors->has('conveyor_start_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor_start_speed}}" name="conveyor_start_speed" id="input-conveyor_start_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
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
                                        <input class="form-control{{ $errors->has('conveyor_end_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor_end_speed}}" name="conveyor_end_speed" id="input-conveyor_end_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
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
                                <label class="col-md-4 col-form-label">{{ __('Conveyor1 Start Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor1_start_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor1_start_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor1_start_speed}}" name="conveyor1_start_speed" id="input-conveyor1_start_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor1_start_speed'))
                                            <span id="conveyor1_start_speed-error" class="error text-danger" for="input-conveyor1_start_speed">{{ $errors->first('conveyor1_start_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor1 End Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor1_end_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor1_end_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor1_end_speed}}" name="conveyor1_end_speed" id="input-conveyor1_end_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor1_end_speed'))
                                            <span id="conveyor1_end_speed-error" class="error text-danger" for="input-conveyor1_end_speed">{{ $errors->first('conveyor1_end_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor2 Start Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor2_start_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor2_start_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor2_start_speed}}" name="conveyor2_start_speed" id="input-conveyor2_start_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor2_start_speed'))
                                            <span id="conveyor2_start_speed-error" class="error text-danger" for="input-conveyor2_start_speed">{{ $errors->first('conveyor2_start_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor2 End Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor2_end_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor2_end_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor2_end_speed}}" name="conveyor2_end_speed" id="input-conveyor2_end_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor2_end_speed'))
                                            <span id="conveyor2_end_speed-error" class="error text-danger" for="input-conveyor2_end_speed">{{ $errors->first('conveyor2_end_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor3 Start Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor3_start_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor3_start_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor3_start_speed}}" name="conveyor3_start_speed" id="input-conveyor3_start_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor3_start_speed'))
                                            <span id="conveyor3_start_speed-error" class="error text-danger" for="input-conveyor3_start_speed">{{ $errors->first('conveyor3_start_speed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Conveyor3 End Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('conveyor3_end_speed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('conveyor3_end_speed') ? ' is-invalid' : '' }}" value="{{$attribute->conveyor3_end_speed}}" name="conveyor3_end_speed" id="input-conveyor3_end_speed" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('conveyor3_end_speed'))
                                            <span id="conveyor3_end_speed-error" class="error text-danger" for="input-conveyor3_end_speed">{{ $errors->first('conveyor3_end_speed') }}</span>
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
                                        <input class="form-control{{ $errors->has('trash_can_size') ? ' is-invalid' : '' }}" value="{{$attribute->trash_can_size}}" name="trash_can_size" id="input-trash_can_size" type="number" placeholder="{{ __('10') }}" required />
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
                                        <input class="form-control{{ $errors->has('starting_happiness') ? ' is-invalid' : '' }}" value="{{$attribute->starting_happiness}}" name="starting_happiness" id="input-starting_happiness" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('starting_happiness'))
                                            <span id="starting_happiness-error" class="error text-danger" for="input-starting_happiness">{{ $errors->first('starting_happiness') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_score') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_score') ? ' is-invalid' : '' }}" value="{{$attribute->grade_score}}" name="grade_score" id="input-grade_score" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('grade_score'))
                                            <span id="grade_score-error" class="error text-danger" for="input-grade_score">{{ $errors->first('grade_score') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade A Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_A') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_A') ? ' is-invalid' : '' }}" value="{{$attribute->grade_A}}" name="grade_A" id="input-grade_A" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_A'))
                                            <span id="grade_A-error" class="error text-danger" for="input-grade_A">{{ $errors->first('grade_A') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade B Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_B') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_B') ? ' is-invalid' : '' }}" value="{{$attribute->grade_B}}" name="grade_B" id="input-grade_B" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_B'))
                                            <span id="grade_B-error" class="error text-danger" for="input-grade_B">{{ $errors->first('grade_B') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade C Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_C') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_C') ? ' is-invalid' : '' }}" value="{{$attribute->grade_C}}" name="grade_C" id="input-grade_C" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_C'))
                                            <span id="grade_C-error" class="error text-danger" for="input-grade_C">{{ $errors->first('grade_C') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade D Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_D') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_D') ? ' is-invalid' : '' }}" value="{{$attribute->grade_D}}" name="grade_D" id="input-grade_D" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_D'))
                                            <span id="grade_D-error" class="error text-danger" for="input-grade_D">{{ $errors->first('grade_D') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade E Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_E') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_E') ? ' is-invalid' : '' }}" value="{{$attribute->grade_E}}" name="grade_E" id="input-grade_E" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_E'))
                                            <span id="grade_E-error" class="error text-danger" for="input-grade_E">{{ $errors->first('grade_E') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade F Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_F') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_F') ? ' is-invalid' : '' }}" value="{{$attribute->grade_F}}" name="grade_F" id="input-grade_F" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_F'))
                                            <span id="grade_F-error" class="error text-danger" for="input-grade_F">{{ $errors->first('grade_F') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grade S Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('grade_S') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('grade_S') ? ' is-invalid' : '' }}" value="{{$attribute->grade_S}}" name="grade_S" id="input-grade_S" type="text" placeholder="{{ __('1.00') }}" required />
                                        @if ($errors->has('grade_S'))
                                            <span id="grade_S-error" class="error text-danger" for="input-grade_S">{{ $errors->first('grade_S') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Bad food multiplier') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('bad_food_multi') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('bad_food_multi') ? ' is-invalid' : '' }}" value="{{$attribute->bad_food_multi}}" name="bad_food_multi" id="input-bad_food_multi" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('bad_food_multi'))
                                            <span id="bad_food_multi-error" class="error text-danger" for="input-bad_food_multi">{{ $errors->first('bad_food_multi') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Attribute') }}</button>
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
    data() {
        return {
            drawer: false,
            proecssing: false,
        };
    },
    watch: {
        // 'form.co_morbidities'(value) {
        //     console.log(th0.0is.step)
        // },
    },
    methods:{},
    mounted(){
        // this.getIngredients();
    },
});
</script>
@endpush
