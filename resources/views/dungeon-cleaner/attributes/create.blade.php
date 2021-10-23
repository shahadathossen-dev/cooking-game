@extends('layouts.frontend', ['activePage' => 'attributes-management', 'titlePage' => __('Attributes Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('dungeon-cleaner.attributes.store') }}" autocomplete="off" class="form-horizontal">
        @csrf
        @method('post')

        <div class="card ">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Add Merged Attribute') }}</h4>
                <a href="{{ route('dungeon-cleaner.attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Attribute Name') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('attr_name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('attr_name') ? ' is-invalid' : '' }}" name="attr_name" id="input-attr_name" type="number" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('attr_name'))
                                            <span id="attr_name-error" class="error text-danger" for="input-attr_name">{{ $errors->first('attr_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Attribute Value') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('attr_value') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('attr_value') ? ' is-invalid' : '' }}" name="attr_value" id="input-attr_value" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('attr_value'))
                                            <span id="attr_value-error" class="error text-danger" for="input-attr_value">{{ $errors->first('attr_value') }}</span>
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
