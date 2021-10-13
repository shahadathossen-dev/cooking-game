@extends('layouts.frontend', ['activePage' => 'Level-management', 'titlePage' => __('Level Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('woodchop.wc3a.grades.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Level') }}</h4>
                                <a href="{{ route('woodchop.wc3a.grades.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Level Name') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('grade_name') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('grade_name') ? ' is-invalid' : '' }}"
                                                            name="grade_name" id="input-grade_name" type="text"
                                                            placeholder="{{ __('Level Name') }}"
                                                            value="{{ old('grade_name') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('grade_name'))
                                                            <span id="grade_name-error" class="error text-danger"
                                                                for="input-grade_name">{{ $errors->first('grade_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Level Value') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('grade_value') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('grade_value') ? ' is-invalid' : '' }}"
                                                            name="grade_value" id="input-grade_value" type="number"
                                                            placeholder="{{ __('1') }}" required />
                                                        @if ($errors->has('grade_value'))
                                                            <span id="grade_value-error" class="error text-danger"
                                                                for="input-grade_value">{{ $errors->first('grade_value') }}</span>
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
