@extends('layouts.frontend', ['activePage' => 'attributes-management', 'titlePage' => __('Attribiutes Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('cm3.attributes.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Lveel') }}</h4>
                            <a href="{{ route('cm3.attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Attribute Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('attr_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('attr_name') ? ' is-invalid' : '' }}" name="attr_name" id="input-attr_name" type="text" placeholder="{{ __('Attribiute name') }}" required />
                                            @if ($errors->has('attr_name'))
                                                <span id="attr_name-error" class="error text-danger" for="input-attr_name">{{ $errors->first('attr_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Attribiute Value') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('attr_value') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('attr_value') ? ' is-invalid' : '' }}" name="attr_value" id="input-attr_value" type="text" placeholder="{{ __('value') }}" required />
                                            @if ($errors->has('attr_value'))
                                                <span id="attr_value-error" class="error text-danger" for="input-attr_value">{{ $errors->first('attr_value') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-sm-7">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Attribute') }}</button>
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
        // ingredients: [],
    },
    filters: {},
    methods:{
    },
    mounted(){
        // this.getIngredients();
    },
})
</script>
@endpush
