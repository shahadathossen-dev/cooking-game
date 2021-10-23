@extends('layouts.frontend', ['activePage' => 'tile-spawns-management', 'titlePage' => __('Tile Spawn Management')])

@section('content')
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('dungeon-cleaner.tile-spawns.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary content-header">
                                <h4 class="card-title">{{ __('Add Shop') }}</h4>
                                <a href="{{ route('dungeon-cleaner.tile-spawns.index') }}"
                                    class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                            </div>
                            <div class="card-body ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('tile_spawn_name') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('tile_spawn_name') ? ' is-invalid' : '' }}"
                                                            name="tile_spawn_name" id="input-tile_spawn_name" type="text"
                                                            placeholder="{{ __('Name') }}"
                                                            value="{{ old('tile_spawn_name') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('tile_spawn_name'))
                                                            <span id="tile_spawn_name-error" class="error text-danger"
                                                                for="input-tile_spawn_name">{{ $errors->first('tile_spawn_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Min') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('tile_spawn_min') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('tile_spawn_min') ? ' is-invalid' : '' }}"
                                                            name="tile_spawn_min" id="input-tile_spawn_min" type="number"
                                                            placeholder="{{ __('Min') }}"
                                                            value="{{ old('tile_spawn_min') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('tile_spawn_min'))
                                                            <span id="tile_spawn_min-error" class="error text-danger"
                                                                for="input-tile_spawn_min">{{ $errors->first('tile_spawn_min') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label">{{ __('Max') }}</label>
                                                <div class="col-sm-7">
                                                    <div
                                                        class="form-group{{ $errors->has('tile_spawn_max') ? ' has-danger' : '' }}">
                                                        <input
                                                            class="form-control{{ $errors->has('tile_spawn_max') ? ' is-invalid' : '' }}"
                                                            name="tile_spawn_max" id="input-tile_spawn_max" type="number"
                                                            placeholder="{{ __('Max') }}"
                                                            value="{{ old('tile_spawn_max') }}" required="true"
                                                            aria-required="true" />
                                                        @if ($errors->has('tile_spawn_max'))
                                                            <span id="tile_spawn_max-error" class="error text-danger"
                                                                for="input-tile_spawn_max">{{ $errors->first('tile_spawn_max') }}</span>
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
