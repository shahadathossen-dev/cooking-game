@extends('layouts.frontend', ['activePage' => 'Islands-Size-management', 'titlePage' => __('Islands Size Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('v1is.island-sizes.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Islands Size') }}</h4>
                            <a href="{{ route('v1is.island-sizes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Island Size Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('is_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('is_name') ? ' is-invalid' : '' }}" name="is_name" id="input-is_name" type="text" placeholder="{{ __('Island Size Name') }}" value="{{ old('is_name') }}" required="true" aria-required="true"/>
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
                                            <input class="form-control{{ $errors->has('is_min') ? ' is-invalid' : '' }}" name="is_min" id="input-is_min" min="1" step="0.01" type="number" placeholder="{{ __('Island Size Min') }}" value="{{ old('is_min') }}" required="true" aria-required="true"/>
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
                                            <input class="form-control{{ $errors->has('is_max') ? ' is-invalid' : '' }}" name="is_max" id="input-is_max" min="1" step="0.01" type="number" placeholder="{{ __('Island Size Max') }}" value="{{ old('is_max') }}" required="true" aria-required="true"/>
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
