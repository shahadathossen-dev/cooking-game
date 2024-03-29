@extends('layouts.frontend', ['activePage' => 'attribute-management', 'titlePage' => __('Attribute Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('woodchop.wc3b.attributes.update', $attribute) }}" autocomplete="off" class="form-horizontal container">
        @csrf
        @method('put')

        <div class="card">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Edit Attribute') }}</h4>
                <a href="{{ route('woodchop.wc3b.attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
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
                                <label class="col-md-4 col-form-label">{{ __('Cat Weight') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('cat_weight') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('cat_weight') ? ' is-invalid' : '' }}" value="{{$attribute->cat_weight}}" name="cat_weight" id="input-cat_weight" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('cat_weight'))
                                            <span id="cat_weight-error" class="error text-danger" for="input-cat_weight">{{ $errors->first('cat_weight') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Gravity') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('gravity') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('gravity') ? ' is-invalid' : '' }}" value="{{$attribute->gravity}}" name="gravity" id="input-gravity" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('gravity'))
                                            <span id="gravity-error" class="error text-danger" for="input-gravity">{{ $errors->first('gravity') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Friction') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('friction') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('friction') ? ' is-invalid' : '' }}" value="{{$attribute->friction}}" name="friction" id="input-friction" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('friction'))
                                            <span id="friction-error" class="error text-danger" for="input-friction">{{ $errors->first('friction') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Play Time') }}</label>
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
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Add Time Per Chop') }}</label>
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
        // this.getAttributes();
    },
});
</script>
@endpush
