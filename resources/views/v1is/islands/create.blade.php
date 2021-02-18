@extends('layouts.frontend', ['activePage' => 'Islands-management', 'titlePage' => __('Islands Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('v1is.islands.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Islands') }}</h4>
                            <a href="{{ route('v1is.islands.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Map Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('is_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('is_name') ? ' is-invalid' : '' }}" name="is_name" id="input-is_name" type="text" placeholder="{{ __('Map Name') }}" value="{{ old('is_name') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('is_name'))
                                                <span id="is_name-error" class="error text-danger" for="input-is_name">{{ $errors->first('is_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Zone 1 Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('is_zone1') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('is_zone1') ? ' is-invalid' : '' }}" name="is_zone1" id="input-is_zone1" type="text" placeholder="{{ __('Zone 1 Name') }}" value="{{ old('is_zone1') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('is_zone1'))
                                                <span id="is_zone1-error" class="error text-danger" for="input-is_zone1">{{ $errors->first('is_zone1') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Zone 2 Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('is_zone2') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('is_zone2') ? ' is-invalid' : '' }}" name="is_zone2" id="input-is_zone2" type="text" placeholder="{{ __('Zone 2 Name') }}" value="{{ old('is_zone2') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('is_zone2'))
                                                <span id="is_zone2-error" class="error text-danger" for="input-is_zone2">{{ $errors->first('is_zone2') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Zone 3 Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('is_zone3') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('is_zone3') ? ' is-invalid' : '' }}" name="is_zone3" id="input-is_zone3" type="text" placeholder="{{ __('Zone 3 Name') }}" value="{{ old('is_zone3') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('is_zone3'))
                                                <span id="is_zone3-error" class="error text-danger" for="input-is_zone3">{{ $errors->first('is_zone3') }}</span>
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
    data:{
        drawer: false,
        proecssing: false,
        roles: [],
    },
    filters: {},
    methods:{
        // this.getRoles();
    },
    mounted(){
        // this.getRoles();
    },
})
</script>
@endpush
