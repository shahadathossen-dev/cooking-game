@extends('layouts.frontend', ['activePage' => 'ingredient-management', 'titlePage' => __('Ingredient Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('cm2b.ingredients.update', $ingredient) }}" autocomplete="off" class="form-horizontal">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Ingredient') }}</h4>
                        <a href="{{ route('cm2b.ingredients.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Ingredient Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ing') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('ing') ? ' is-invalid' : '' }}" name="ing" id="input-ing" type="text" placeholder="{{ __('Ingredient Name') }}" value="{{ $ingredient->ing }}" required="true" aria-required="true"/>
                                        @if ($errors->has('ing'))
                                            <span id="ing-error" class="error text-danger" for="input-ing">{{ $errors->first('ing') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Priority') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ing_priority') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('ing_priority') ? ' is-invalid' : '' }}" name="ing_priority" id="input-ing_priority" value="{{ $ingredient->ing_priority }}" min="1" type="number" placeholder="{{ __('1') }}" required />
                                        @if ($errors->has('ing_priority'))
                                            <span id="ing_priority-error" class="error text-danger" for="input-ing_priority">{{ $errors->first('ing_priority') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Score') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ing_score') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('ing_score') ? ' is-invalid' : '' }}" name="ing_score" id="input-ing_score" min="1" value="{{ $ingredient->ing_score }}" type="number" placeholder="{{ __('10') }}" required />
                                        @if ($errors->has('ing_score'))
                                            <span id="ing_score-error" class="error text-danger" for="input-ing_score">{{ $errors->first('ing_score') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-sm-7">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Ingredient') }}</button>
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
