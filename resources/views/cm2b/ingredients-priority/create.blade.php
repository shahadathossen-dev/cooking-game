@extends('layouts.frontend', ['activePage' => 'ingredients-prirority-management', 'titlePage' => __('Ingredients Priroty Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('cm2b.ingredient-priority.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Ingredient priority') }}</h4>
                            <a href="{{ route('cm2b.ingredient-priority.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <label for="ing" class="col-sm-2 col-form-label">{{ __('Ingredient') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group {{ $errors->has('ing') ? 'has-danger' : '' }}">
                                            <select name="ing" id="ing"  class="form-control {{ $errors->has('ing') ? 'is-invalid' : '' }}" required>
                                                <option disabled selected>Select Ingredient</option>
                                                @foreach($ingredients_list as $item)
                                                <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('ing'))
                                                <span id="ing-error" class="error text-danger" for="input-ing">{{ $errors->first('ing') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Priority') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('priority') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('priority') ? ' is-invalid' : '' }}" name="priority" id="input-priority" type="number" placeholder="{{ __('10') }}" min="1" step="0.01" required />
                                            @if ($errors->has('priority'))
                                                <span id="priority-error" class="error text-danger" for="input-priority">{{ $errors->first('priority') }}</span>
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
    data:{
        drawer: false,
        proecssing: false,
        // ingredients: [],
    },
    filters: {},
    methods:{
        getIngredients(){
            axios.get('{{route("cm2b.ingredients.list")}}')
                .then(res=>{
                    this.$nextTick(function () {
                        this.ingredients = res.data;
                    });
                })
                .catch(e=>{
                    alert(e);
                })
        },
    },
    mounted(){
        // this.getIngredients();
    },
})
</script>
@endpush
