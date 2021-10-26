@extends('layouts.frontend', ['activePage' => 'attributes-management', 'titlePage' => __('Attribute Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('woodchop.wc3a.attributes.update', $attribute) }}"
                        autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Shop') }}</h4>
                                <a href="{{ route('woodchop.wc3a.attributes.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Attribute Name') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('attr_name') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('attr_name') ? ' is-invalid' : '' }}"
                                                            name="attr_name" id="input-attr_name" type="text"
                                                            placeholder="{{ __('attr_name') }}"
                                                            value="{{ $attribute->attr_name }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('attr_name'))
                                                            <span id="attr_name-error" class="error text-danger"
                                                                for="input-attr_name">{{ $errors->first('attr_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label
                                                    class="col-sm-3 col-form-label">{{ __('Attribute Value') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('attr_value') ? ' has-danger' : '' }}">
                                                        @if (strpos($attribute->attr_name, 'color'))
                                                            <input
                                                                class="form-control{{ $errors->has('attr_value') ? ' is-invalid' : '' }}"
                                                                name="attr_value" id="input-attr_value" type="color"
                                                                placeholder="{{ __('attr_value') }}"
                                                                value="{{ $attribute->attr_value }}" required="true"
                                                                aria-required="true" />
                                                        @else
                                                            <input
                                                                class="form-control{{ $errors->has('attr_value') ? ' is-invalid' : '' }}"
                                                                name="attr_value" id="input-attr_value" type="text"
                                                                placeholder="{{ __('attr_value') }}"
                                                                value="{{ $attribute->attr_value }}" required="true"
                                                                aria-required="true" />
                                                        @endif

                                                        @if ($errors->has('attr_value'))
                                                            <span id="attr_value-error" class="error text-danger"
                                                                for="input-attr_value">{{ $errors->first('attr_value') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-7">
                                                    <div class="form-group text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary ml-auto">{{ __('Save') }}</button>
                                                    </div>
                                                </div>
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
            data: {
                drawer: false,
                proecssing: false,
                roles: [],
            },
            filters: {},
            methods: {
                // this.getRoles();
            },
            mounted() {
                // this.getRoles();
            },
        })
    </script>
@endpush
