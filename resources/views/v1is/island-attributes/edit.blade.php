@extends('layouts.frontend', ['activePage' => 'ingredient-management', 'titlePage' => __('Attributes Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('v1is.island-attributes.update', $attribute) }}" autocomplete="off" class="form-horizontal container">
        @csrf
        @method('put')

        <div class="card">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Edit Attributes') }}</h4>
                <a href="{{ route('v1is.island-attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Timer') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('timer') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('timer') ? ' is-invalid' : '' }}" value="{{$attribute->timer}}" name="timer" id="input-timer" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('timer'))
                                            <span id="timer-error" class="error text-danger" for="input-timer">{{ $errors->first('timer') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Move Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandmovespeed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandmovespeed') ? ' is-invalid' : '' }}" value="{{$attribute->islandmovespeed}}" name="islandmovespeed" id="input-islandmovespeed" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandmovespeed'))
                                            <span id="islandmovespeed-error" class="error text-danger" for="input-islandmovespeed">{{ $errors->first('islandmovespeed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Accelerate Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandacceleratespeed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandacceleratespeed') ? ' is-invalid' : '' }}" value="{{$attribute->islandacceleratespeed}}" name="islandacceleratespeed" id="input-islandacceleratespeed" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandacceleratespeed'))
                                            <span id="islandacceleratespeed-error" class="error text-danger" for="input-islandacceleratespeed">{{ $errors->first('islandacceleratespeed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Decelerate Speed') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islanddeceleratespeed') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islanddeceleratespeed') ? ' is-invalid' : '' }}" value="{{$attribute->islanddeceleratespeed}}" name="islanddeceleratespeed" id="input-islanddeceleratespeed" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islanddeceleratespeed'))
                                            <span id="islanddeceleratespeed-error" class="error text-danger" for="input-islanddeceleratespeed">{{ $errors->first('islanddeceleratespeed') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Speed Penalty') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandspeedpenalty') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandspeedpenalty') ? ' is-invalid' : '' }}" value="{{$attribute->islandspeedpenalty}}" name="islandspeedpenalty" id="input-islandspeedpenalty" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandspeedpenalty'))
                                            <span id="islandspeedpenalty-error" class="error text-danger" for="input-islandspeedpenalty">{{ $errors->first('islandspeedpenalty') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Size Small') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandsize_small') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandsize_small') ? ' is-invalid' : '' }}" value="{{$attribute->islandsize_small}}" name="islandsize_small" id="input-islandsize_small" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandsize_small'))
                                            <span id="islandsize_small-error" class="error text-danger" for="input-islandsize_small">{{ $errors->first('islandsize_small') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Size Medium') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandsize_medium') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandsize_medium') ? ' is-invalid' : '' }}" value="{{$attribute->islandsize_medium}}" name="islandsize_medium" id="input-islandsize_medium" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandsize_medium'))
                                            <span id="islandsize_medium-error" class="error text-danger" for="input-islandsize_medium">{{ $errors->first('islandsize_medium') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Size Big') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandsize_big') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandsize_big') ? ' is-invalid' : '' }}" value="{{$attribute->islandsize_big}}" name="islandsize_big" id="input-islandsize_big" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandsize_big'))
                                            <span id="islandsize_big-error" class="error text-danger" for="input-islandsize_big">{{ $errors->first('islandsize_big') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Size Boss') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandsize_boss') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandsize_boss') ? ' is-invalid' : '' }}" value="{{$attribute->islandsize_boss}}" name="islandsize_boss" id="input-islandsize_boss" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandsize_boss'))
                                            <span id="islandsize_boss-error" class="error text-danger" for="input-islandsize_boss">{{ $errors->first('islandsize_boss') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grow Chance Red') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandgrowchance_red') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandgrowchance_red') ? ' is-invalid' : '' }}" value="{{$attribute->islandgrowchance_red}}" name="islandgrowchance_red" id="input-islandgrowchance_red" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandgrowchance_red'))
                                            <span id="islandgrowchance_red-error" class="error text-danger" for="input-islandgrowchance_red">{{ $errors->first('islandgrowchance_red') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grow Chance Grey') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandgrowchance_grey') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandgrowchance_grey') ? ' is-invalid' : '' }}" value="{{$attribute->islandgrowchance_grey}}" name="islandgrowchance_grey" id="input-islandgrowchance_grey" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" requigrey />
                                        @if ($errors->has('islandgrowchance_grey'))
                                            <span id="islandgrowchance_grey-error" class="error text-danger" for="input-islandgrowchance_grey">{{ $errors->first('islandgrowchance_grey') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grow Chance Blue') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandgrowchance_blue') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandgrowchance_blue') ? ' is-invalid' : '' }}" value="{{$attribute->islandgrowchance_blue}}" name="islandgrowchance_blue" id="input-islandgrowchance_blue" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandgrowchance_blue'))
                                            <span id="islandgrowchance_blue-error" class="error text-danger" for="input-islandgrowchance_blue">{{ $errors->first('islandgrowchance_blue') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Grow Chance Yellow') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('islandgrowchance_yellow') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('islandgrowchance_yellow') ? ' is-invalid' : '' }}" value="{{$attribute->islandgrowchance_yellow}}" name="islandgrowchance_yellow" id="input-islandgrowchance_yellow" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('islandgrowchance_yellow'))
                                            <span id="islandgrowchance_yellow-error" class="error text-danger" for="input-islandgrowchance_yellow">{{ $errors->first('islandgrowchance_yellow') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 1 Small') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone1_small') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone1_small') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone1_small}}" name="mapspawn_zone1_small" id="input-mapspawn_zone1_small" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone1_small'))
                                            <span id="mapspawn_zone1_small-error" class="error text-danger" for="input-mapspawn_zone1_small">{{ $errors->first('mapspawn_zone1_small') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 2 Small') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone2_small') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone2_small') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone2_small}}" name="mapspawn_zone2_small" id="input-mapspawn_zone2_small" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone2_small'))
                                            <span id="mapspawn_zone2_small-error" class="error text-danger" for="input-mapspawn_zone2_small">{{ $errors->first('mapspawn_zone2_small') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 3 Small') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone3_small') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone3_small') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone3_small}}" name="mapspawn_zone3_small" id="input-mapspawn_zone3_small" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone3_small'))
                                            <span id="mapspawn_zone3_small-error" class="error text-danger" for="input-mapspawn_zone3_small">{{ $errors->first('mapspawn_zone3_small') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 1 Medium') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone1_medium') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone1_medium') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone1_medium}}" name="mapspawn_zone1_medium" id="input-mapspawn_zone1_medium" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone1_medium'))
                                            <span id="mapspawn_zone1_medium-error" class="error text-danger" for="input-mapspawn_zone1_medium">{{ $errors->first('mapspawn_zone1_medium') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 2 Medium') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone2_medium') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone2_medium') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone2_medium}}" name="mapspawn_zone2_medium" id="input-mapspawn_zone2_medium" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone2_medium'))
                                            <span id="mapspawn_zone2_medium-error" class="error text-danger" for="input-mapspawn_zone2_medium">{{ $errors->first('mapspawn_zone2_medium') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 3 Medium') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone3_medium') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone3_medium') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone3_medium}}" name="mapspawn_zone3_medium" id="input-mapspawn_zone3_medium" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone3_medium'))
                                            <span id="mapspawn_zone3_medium-error" class="error text-danger" for="input-mapspawn_zone3_medium">{{ $errors->first('mapspawn_zone3_medium') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 1 Big') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone1_big') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone1_big') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone1_big}}" name="mapspawn_zone1_big" id="input-mapspawn_zone1_big" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone1_big'))
                                            <span id="mapspawn_zone1_big-error" class="error text-danger" for="input-mapspawn_zone1_big">{{ $errors->first('mapspawn_zone1_big') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 2 Big') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone2_big') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone2_big') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone2_big}}" name="mapspawn_zone2_big" id="input-mapspawn_zone2_big" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone2_big'))
                                            <span id="mapspawn_zone2_big-error" class="error text-danger" for="input-mapspawn_zone2_big">{{ $errors->first('mapspawn_zone2_big') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 3 Big') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone3_big') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone3_big') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone3_big}}" name="mapspawn_zone3_big" id="input-mapspawn_zone3_big" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone3_big'))
                                            <span id="mapspawn_zone3_big-error" class="error text-danger" for="input-mapspawn_zone3_big">{{ $errors->first('mapspawn_zone3_big') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 1 Boss') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone1_boss') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone1_boss') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone1_boss}}" name="mapspawn_zone1_boss" id="input-mapspawn_zone1_boss" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone1_boss'))
                                            <span id="mapspawn_zone1_boss-error" class="error text-danger" for="input-mapspawn_zone1_boss">{{ $errors->first('mapspawn_zone1_boss') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 2 Boss') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone2_boss') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone2_boss') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone2_boss}}" name="mapspawn_zone2_boss" id="input-mapspawn_zone2_boss" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone2_boss'))
                                            <span id="mapspawn_zone2_boss-error" class="error text-danger" for="input-mapspawn_zone2_boss">{{ $errors->first('mapspawn_zone2_boss') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Spawn Zone 3 Boss') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('mapspawn_zone3_boss') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('mapspawn_zone3_boss') ? ' is-invalid' : '' }}" value="{{$attribute->mapspawn_zone3_boss}}" name="mapspawn_zone3_boss" id="input-mapspawn_zone3_boss" type="number"  min="1" step="0.01" placeholder="{{ __('10') }}" />
                                        @if ($errors->has('mapspawn_zone3_boss'))
                                            <span id="mapspawn_zone3_boss-error" class="error text-danger" for="input-mapspawn_zone3_boss">{{ $errors->first('mapspawn_zone3_boss') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
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
        // this.getAttributess();
    },
});
</script>
@endpush
