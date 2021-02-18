@extends('layouts.frontend', ['activePage' => 'island-shape-management', 'titlePage' => __('Island Size Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('v1is.island-sizes.update', $islandSize) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Island Size') }}</h4>
                        <a href="{{ route('v1is.island-sizes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Island Size Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('is_name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('is_name') ? ' is-invalid' : '' }}" name="is_name" id="input-is_name" type="text" placeholder="{{ __('Island Size Name') }}" value="{{ $islandSize->is_name }}" required="true" aria-required="true"/>
                                        @if ($errors->has('is_name'))
                                            <span id="is_name-error" class="error text-danger" for="input-is_name">{{ $errors->first('is_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Island Size Min') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('is_min') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('is_min') ? ' is-invalid' : '' }}" name="is_min" id="input-is_min" min="1" step="0.01" type="number" placeholder="{{ __('Island Size Min') }}" value="{{ $islandSize->is_min }}" required="true" aria-required="true"/>
                                        @if ($errors->has('is_min'))
                                            <span id="is_min-error" class="error text-danger" for="input-is_min">{{ $errors->first('is_min') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Island Size Max') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('is_max') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('is_max') ? ' is-invalid' : '' }}" name="is_max" id="input-is_max" min="1" step="0.01" type="number" placeholder="{{ __('Island Size Max') }}" value="{{ $islandSize->is_max }}" required="true" aria-required="true"/>
                                        @if ($errors->has('is_max'))
                                            <span id="is_max-error" class="error text-danger" for="input-is_max">{{ $errors->first('is_max') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-sm-7">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Map') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
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
            booted: false,
            roles: [],
        };
    },
    watch: {
        // 'form.co_morbidities'(value) {
        //     console.log(this.step)
        // },
    },
    mounted() {
        // console.log(this.hasState(15));
    },
    created() {
        // console.log(this.hasState(15));
    },
    computed: {
        // console.log(this.hasState(15));
    },
    methods:{
        // console.log(this.hasState(15));
    },
});
</script>
@endpush
