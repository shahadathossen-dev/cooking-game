@extends('layouts.frontend', ['activePage' => 'Shop-management', 'titlePage' => __('Shop Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('woodchop.wc3a.shops.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Shop') }}</h4>
                                <a href="{{ route('woodchop.wc3a.shops.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('shop_name') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('shop_name') ? ' is-invalid' : '' }}"
                                                            name="shop_name" id="input-shop_name" type="text"
                                                            placeholder="{{ __('Shop Name') }}"
                                                            value="{{ old('shop_name') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('shop_name'))
                                                            <span id="shop_name-error" class="error text-danger"
                                                                for="input-shop_name">{{ $errors->first('shop_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Avatar') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('avatar') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}"
                                                            name="avatar" id="input-avatar" type="file" />
                                                        @if ($errors->has('avatar'))
                                                            <span id="avatar-error" class="error text-danger"
                                                                for="input-avatar">{{ $errors->first('avatar') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Item Type') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('wood_score') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('wood_score') ? ' is-invalid' : '' }}"
                                                            name="wood_score" id="input-wood_score" type="text"
                                                            required />
                                                        @if ($errors->has('wood_score'))
                                                            <span id="wood_score-error" class="error text-danger"
                                                                for="input-wood_score">{{ $errors->first('wood_score') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Bonus String') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('cat_score') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('cat_score') ? ' is-invalid' : '' }}"
                                                            name="cat_score" id="input-cat_score" type="text"
                                                            required />
                                                        @if ($errors->has('cat_score'))
                                                            <span id="cat_score-error" class="error text-danger"
                                                                for="input-cat_score">{{ $errors->first('cat_score') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Wood Currencty') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('wood_currency') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('wood_currency') ? ' is-invalid' : '' }}"
                                                            name="wood_currency" id="input-wood_currency" type="number"
                                                            placeholder="{{ __('1') }}" required />
                                                        @if ($errors->has('wood_currency'))
                                                            <span id="wood_currency-error" class="error text-danger"
                                                                for="input-wood_currency">{{ $errors->first('wood_currency') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Honey Currencty') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('cat_currency') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('cat_currency') ? ' is-invalid' : '' }}"
                                                            name="cat_currency" id="input-cat_currency" type="number"
                                                            placeholder="{{ __('1') }}" required />
                                                        @if ($errors->has('cat_currency'))
                                                            <span id="cat_currency-error" class="error text-danger"
                                                                for="input-cat_currency">{{ $errors->first('cat_currency') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Branch Destruction Power') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('wood_cost') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('wood_cost') ? ' is-invalid' : '' }}"
                                                            name="wood_cost" id="input-wood_cost" type="number"
                                                            placeholder="{{ __('1') }}" required />
                                                        @if ($errors->has('wood_cost'))
                                                            <span id="wood_cost-error" class="error text-danger"
                                                                for="input-wood_cost">{{ $errors->first('wood_cost') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Honey Cost') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('cat_cost') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('cat_cost') ? ' is-invalid' : '' }}"
                                                            name="cat_cost" id="input-cat_cost" type="number"
                                                            placeholder="{{ __('1') }}" required />
                                                        @if ($errors->has('cat_cost'))
                                                            <span id="cat_cost-error" class="error text-danger"
                                                                for="input-cat_cost">{{ $errors->first('cat_cost') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Physics Val') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('physics_val') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('physics_val') ? ' is-invalid' : '' }}"
                                                            name="physics_val" id="input-physics_val" type="number"
                                                            placeholder="{{ __('1') }}" required />
                                                        @if ($errors->has('physics_val'))
                                                            <span id="physics_val-error" class="error text-danger"
                                                                for="input-physics_val">{{ $errors->first('physics_val') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
