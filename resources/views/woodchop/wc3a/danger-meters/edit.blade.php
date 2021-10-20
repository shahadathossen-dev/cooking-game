@extends('layouts.frontend', ['activePage' => 'danger-meter-management', 'titlePage' => __('Danger Meter Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('woodchop.wc3a.danger-meter.update', $dangerMeter) }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Shop') }}</h4>
                                <a href="{{ route('woodchop.wc3a.danger-meter.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Color') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}"
                                                            name="color" id="input-color" type="text"
                                                            placeholder="{{ __('Color') }}"
                                                            value="{{ $dangerMeter->color }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('color'))
                                                            <span id="color-error" class="error text-danger"
                                                                for="input-color">{{ $errors->first('color') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Left') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('left') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('left') ? ' is-invalid' : '' }}"
                                                            name="left" id="input-left" type="text"
                                                            placeholder="{{ __('Left') }}"
                                                            value="{{ $dangerMeter->left }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('left'))
                                                            <span id="left-error" class="error text-danger"
                                                                for="input-left">{{ $errors->first('left') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Right') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('right') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('right') ? ' is-invalid' : '' }}"
                                                            name="right" id="input-right" type="text"
                                                            placeholder="{{ __('Right') }}"
                                                            value="{{ $dangerMeter->right }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('right'))
                                                            <span id="right-error" class="error text-danger"
                                                                for="input-right">{{ $errors->first('right') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Front') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('front') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('front') ? ' is-invalid' : '' }}"
                                                            name="front" id="input-front" type="text"
                                                            placeholder="{{ __('Front') }}"
                                                            value="{{ $dangerMeter->front }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('front'))
                                                            <span id="front-error" class="error text-danger"
                                                                for="input-front">{{ $errors->first('front') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Back') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('back') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('back') ? ' is-invalid' : '' }}"
                                                            name="back" id="input-back" type="text"
                                                            placeholder="{{ __('Back') }}"
                                                            value="{{ $dangerMeter->back }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('back'))
                                                            <span id="back-error" class="error text-danger"
                                                                for="input-back">{{ $errors->first('back') }}</span>
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
