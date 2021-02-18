@extends('layouts.frontend', ['activePage' => 'island-shape-management', 'titlePage' => __('Island Shape Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('v1is.island-shapes.update', $islandShape) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Island Shape') }}</h4>
                        <a href="{{ route('v1is.island-shapes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Island Shape Zone') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('is_zone') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('is_zone') ? ' is-invalid' : '' }}" name="is_zone" id="input-is_zone" type="text" placeholder="{{ __('Island Shape Zone') }}" value="{{ $islandShape->is_zone }}" required="true" aria-required="true"/>
                                        @if ($errors->has('is_zone'))
                                            <span id="is_zone-error" class="error text-danger" for="input-is_zone">{{ $errors->first('is_zone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Island Shape Chance') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('is_chance') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('is_chance') ? ' is-invalid' : '' }}" name="is_chance" id="input-is_chance" type="text" placeholder="{{ __('Island Shape Chance') }}" value="{{ $islandShape->is_chance }}" required="true" aria-required="true"/>
                                        @if ($errors->has('is_chance'))
                                            <span id="is_chance-error" class="error text-danger" for="input-is_chance">{{ $errors->first('is_chance') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Island Shape Column') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('is_column') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('is_column') ? ' is-invalid' : '' }}" name="is_column" id="input-is_column" type="text" placeholder="{{ __('Island Shape Column') }}" value="{{ $islandShape->is_column }}" required="true" aria-required="true"/>
                                        @if ($errors->has('is_column'))
                                            <span id="is_column-error" class="error text-danger" for="input-is_column">{{ $errors->first('is_column') }}</span>
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
