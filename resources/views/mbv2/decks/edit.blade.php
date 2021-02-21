@extends('layouts.frontend', ['activePage' => 'deck-management', 'titlePage' => __('Deck Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('mbv2.decks.update', $deck) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Deck') }}</h4>
                        <a href="{{ route('mbv2.decks.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Deck Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('deck_name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_name') ? ' is-invalid' : '' }}" name="deck_name" id="input-deck_name" type="text" placeholder="{{ __('Map Name') }}" value="{{ $deck->deck_name }}" required="true" aria-required="true"/>
                                        @if ($errors->has('deck_name'))
                                            <span id="deck_name-error" class="error text-danger" for="input-deck_name">{{ $errors->first('deck_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Deck Description') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('deck_description') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_description') ? ' is-invalid' : '' }}" name="deck_description" id="input-deck_description" type="text" placeholder="{{ __('Deck Description') }}" value="{{ $deck->deck_description }}" required="true" aria-required="true"/>
                                        @if ($errors->has('deck_description'))
                                            <span id="deck_description-error" class="error text-danger" for="input-deck_description">{{ $errors->first('deck_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Deck Type') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('deck_type') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_type') ? ' is-invalid' : '' }}" name="deck_type" id="input-deck_type" type="text" placeholder="{{ __('Deck Type') }}" value="{{ $deck->deck_type }}" required="true" aria-required="true"/>
                                        @if ($errors->has('deck_type'))
                                            <span id="deck_type-error" class="error text-danger" for="input-deck_type">{{ $errors->first('deck_type') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Power') }}</label>
                                <div class="col-md-7">
                                    <div class="form-group{{ $errors->has('deck_power') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_power') ? ' is-invalid' : '' }}" name="deck_power" id="input-deck_power" type="number" placeholder="{{ __('10') }}" value="{{ $deck->deck_power }}" required />
                                        @if ($errors->has('deck_power'))
                                            <span id="deck_power-error" class="error text-danger" for="input-deck_power">{{ $errors->first('deck_power') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Health') }}</label>
                                <div class="col-md-7">
                                    <div class="form-group{{ $errors->has('deck_health') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_health') ? ' is-invalid' : '' }}" name="deck_health" id="input-deck_health" type="number" placeholder="{{ __('10') }}" value="{{ $deck->deck_health }}" required />
                                        @if ($errors->has('deck_health'))
                                            <span id="deck_health-error" class="error text-danger" for="input-deck_health">{{ $errors->first('deck_health') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Gold') }}</label>
                                <div class="col-md-7">
                                    <div class="form-group{{ $errors->has('deck_gold') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_gold') ? ' is-invalid' : '' }}" name="deck_gold" id="input-deck_gold" type="number" placeholder="{{ __('10') }}" value="{{ $deck->deck_gold }}" required />
                                        @if ($errors->has('deck_gold'))
                                            <span id="deck_gold-error" class="error text-danger" for="input-deck_gold">{{ $errors->first('deck_gold') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Deck Special') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('deck_special') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck_special') ? ' is-invalid' : '' }}" name="deck_special" id="input-deck_special" type="text" placeholder="{{ __('Deck Special') }}" value="{{ $deck->deck_special }}" required="true" aria-required="true"/>
                                        @if ($errors->has('deck_special'))
                                            <span id="deck_special-error" class="error text-danger" for="input-deck_special">{{ $errors->first('deck_special') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-sm-7">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary ml-auto">{{ __('Save') }}</button>
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
    data() {
        return {
            drawer: false,
            proecssing: false,
            booted: false,
            roles: [],
        };
    },
    watch: {
        // 'form.co_morbidities'(value) {
        //     console.log(this.step)
        // },
    },
    mounted() {
        // console.log(this.hasState(15));
    },
    created() {
        // console.log(this.hasState(15));
    },
    computed: {
        // console.log(this.hasState(15));
    },
    methods:{
        // console.log(this.hasState(15));
    },
});
</script>
@endpush
