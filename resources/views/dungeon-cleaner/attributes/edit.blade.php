@extends('layouts.frontend', ['activePage' => 'attribute-management', 'titlePage' => __('Attribute Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('dungeon-cleaner.attributes.update', $attribute) }}" autocomplete="off" class="form-horizontal container">
        @csrf
        @method('put')

        <div class="card">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Edit Attribute') }}</h4>
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
                                        <input class="form-control{{ $errors->has('attr_name') ? ' is-invalid' : '' }}" value="{{$attribute->attr_name}}" name="attr_name" id="input-attr_name" type="text" placeholder="{{ __('1.00') }}" required />
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
                                        <input class="form-control{{ $errors->has('attr_value') ? ' is-invalid' : '' }}" value="{{$attribute->attr_value}}" name="attr_value" id="input-attr_value" type="number" placeholder="{{ __('1.00') }}" required />
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
