@extends('layouts.frontend', ['activePage' => 'ingredient-management', 'titlePage' => __('Ingredient Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('woodchop.wc1b.attributes.update', $attribute) }}" autocomplete="off" class="form-horizontal container">
        @csrf
        @method('put')

        <div class="card">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Edit Ingredient') }}</h4>
                <a href="{{ route('woodchop.wc1b.attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Branch Freq.') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('branch_freq') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('branch_freq') ? ' is-invalid' : '' }}" value="{{$attribute->branch_freq}}" name="branch_freq" id="input-branch_freq" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('branch_freq'))
                                            <span id="branch_freq-error" class="error text-danger" for="input-branch_freq">{{ $errors->first('branch_freq') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Cat Freq.') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('cat_freq') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('cat_freq') ? ' is-invalid' : '' }}" value="{{$attribute->cat_freq}}" name="cat_freq" id="input-cat_freq" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('cat_freq'))
                                            <span id="cat_freq-error" class="error text-danger" for="input-cat_freq">{{ $errors->first('cat_freq') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Bonus Time') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('bonus_time') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('bonus_time') ? ' is-invalid' : '' }}" value="{{$attribute->bonus_time}}" name="bonus_time" id="input-bonus_time" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('bonus_time'))
                                            <span id="bonus_time-error" class="error text-danger" for="input-bonus_time">{{ $errors->first('bonus_time') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Base Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('base_score') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('base_score') ? ' is-invalid' : '' }}" value="{{$attribute->base_score}}" name="base_score" id="input-base_score" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('base_score'))
                                            <span id="base_score-error" class="error text-danger" for="input-base_score">{{ $errors->first('base_score') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Min Score') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('min_score') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('min_score') ? ' is-invalid' : '' }}" value="{{$attribute->min_score}}" name="min_score" id="input-min_score" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('min_score'))
                                            <span id="min_score-error" class="error text-danger" for="input-min_score">{{ $errors->first('min_score') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
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
