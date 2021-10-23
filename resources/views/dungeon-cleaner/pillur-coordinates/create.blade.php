@extends('layouts.frontend', ['activePage' => 'pillur-cooridnates-management', 'titlePage' => __('Pillur Coordinate Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('dungeon-cleaner.pillur-cooridnates.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Shop') }}</h4>
                                <a href="{{ route('dungeon-cleaner.pillur-cooridnates.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Row') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('pc_row') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('pc_row') ? ' is-invalid' : '' }}"
                                                            name="pc_row" id="input-pc_row" type="number"
                                                            placeholder="{{ __('Row') }}"
                                                            value="{{ old('pc_row') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('pc_row'))
                                                            <span id="pc_row-error" class="error text-danger"
                                                                for="input-pc_row">{{ $errors->first('pc_row') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Column') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('pc_col') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('pc_col') ? ' is-invalid' : '' }}"
                                                            name="pc_col" id="input-pc_col" type="number"
                                                            placeholder="{{ __('Column') }}"
                                                            value="{{ old('pc_col') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('pc_col'))
                                                            <span id="pc_col-error" class="error text-danger"
                                                                for="input-pc_col">{{ $errors->first('pc_col') }}</span>
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
