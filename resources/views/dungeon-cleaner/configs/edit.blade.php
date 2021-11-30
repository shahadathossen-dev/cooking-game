@extends('layouts.frontend', ['activePage' => 'configs-management', 'titlePage' => __('Config Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('dungeon-cleaner.configs.update') }}" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Config') }}</h4>
                                <a href="{{ route('dungeon-cleaner.configs.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Json Config') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('data') ? ' has-danger' : '' }}">
                                                        <textarea
                                                            class="form-control{{ $errors->has('data') ? ' is-invalid' : '' }}"
                                                            name="data" id="input-data"
                                                            placeholder="{{ __('Json file') }}" required="true"
                                                            aria-required="true">
                                                            {{ $config->data }}
                                                        </textarea>
                                                        @if ($errors->has('data'))
                                                            <span id="data-error" class="error text-danger"
                                                                for="input-data">{{ $errors->first('data') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Version') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('version') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('version') ? ' is-invalid' : '' }}"
                                                            name="version" id="input-version" type="text"
                                                            placeholder="{{ __('Version') }}"
                                                            value="{{ $config->version }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('version'))
                                                            <span id="version-error" class="error text-danger"
                                                                for="input-version">{{ $errors->first('version') }}</span>
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
                                                        <button type="submit" class="btn btn-primary ml-auto">
                                                            {{ __('Save') }}
                                                        </button>
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
