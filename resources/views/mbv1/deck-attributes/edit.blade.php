@extends('layouts.frontend', ['activePage' => 'deck-attribute-management', 'titlePage' => __('Attributes Management')])

@section('content')
<main class="content">
    <form method="post" action="{{ route('mbv1.deck-attributes.update', $attribute) }}" autocomplete="off" class="form-horizontal container">
        @csrf
        @method('put')

        <div class="card">
            <div class="card-header card-header-primary content-header">
                <h4 class="card-title">{{ __('Edit Attributes') }}</h4>
                <a href="{{ route('mbv1.deck-attributes.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
            </div>
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Minion') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('minion') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('minion') ? ' is-invalid' : '' }}" name="minion" id="input-minion" type="text" placeholder="{{ __('Minion') }}" value="{{ $attribute->minion }}" required="true" aria-required="true"/>
                                        @if ($errors->has('minion'))
                                            <span id="minion-error" class="error text-danger" for="input-minion">{{ $errors->first('minion') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Effect') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('effect') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('effect') ? ' is-invalid' : '' }}" name="effect" id="input-effect" type="text" placeholder="{{ __('Effect') }}" value="{{ $attribute->effect }}" required="true" aria-required="true"/>
                                        @if ($errors->has('effect'))
                                            <span id="effect-error" class="error text-danger" for="input-effect">{{ $errors->first('effect') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Deck') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('deck') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('deck') ? ' is-invalid' : '' }}" name="deck" id="input-deck" type="text" placeholder="{{ __('Deck') }}" value="{{ $attribute->deck }}" required="true" aria-required="true"/>
                                        @if ($errors->has('deck'))
                                            <span id="deck-error" class="error text-danger" for="input-deck">{{ $errors->first('deck') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Player Health') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('playerhealth') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('playerhealth') ? ' is-invalid' : '' }}" name="playerhealth" id="input-playerhealth" type="number" value="{{ $attribute->playerhealth }}" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('playerhealth'))
                                            <span id="playerhealth-error" class="error text-danger" for="input-playerhealth">{{ $errors->first('playerhealth') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Current Gold') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('currentgold') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('currentgold') ? ' is-invalid' : '' }}" name="currentgold" id="input-currentgold" type="number" value="{{ $attribute->currentgold }}" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('currentgold'))
                                            <span id="currentgold-error" class="error text-danger" for="input-currentgold">{{ $errors->first('currentgold') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <label class="col-md-4 col-form-label">{{ __('Current Health') }}</label>
                                <div class="col-md-8">
                                    <div class="form-group{{ $errors->has('currenthealth') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('currenthealth') ? ' is-invalid' : '' }}" name="currenthealth" id="input-currenthealth" type="number" value="{{ $attribute->currenthealth }}" placeholder="{{ __('1.00') }}" min="0.01" step="0.01" required />
                                        @if ($errors->has('currenthealth'))
                                            <span id="currenthealth-error" class="error text-danger" for="input-currenthealth">{{ $errors->first('currenthealth') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-0">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary ml-auto">{{ __('Save') }}</button>
                                    </div>
                                </div>
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
