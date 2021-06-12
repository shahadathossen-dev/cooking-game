@extends('layouts.frontend', ['activePage' => 'food-item-management', 'titlePage' => __('Food Item Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('cm3.food-items.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Food Item') }}</h4>
                            <a href="{{ route('cm3.food-items.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <label for="food_name" class="col-sm-2 col-form-label">{{ __('Food Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('food_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('food_name') ? ' is-invalid' : '' }}" name="food_name" id="input-food_name" type="text" placeholder="{{ __('Food Name') }}" required />
                                            @if ($errors->has('food_name'))
                                                <span id="food_name-error" class="error text-danger" for="input-food_name">{{ $errors->first('food_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="plate_color" class="col-sm-2 col-form-label">{{ __('Food Color') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group {{ $errors->has('plate_color') ? 'has-danger' : '' }}">
                                            <select name="plate_color" id="plate_color"  class="form-control {{ $errors->has('plate_color') ? 'is-invalid' : '' }}" required>
                                                <option disabled selected>Select Plate Color</option>
                                                @foreach($plate_colors as $color)
                                                <option value="{{$color}}">{{$color}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('plate_color'))
                                                <span id="plate_color-error" class="error text-danger" for="input-plate_color">{{ $errors->first('plate_color') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Rarity') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('food_rarity') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('food_rarity') ? ' is-invalid' : '' }}" name="food_rarity" id="input-food_rarity" type="number" placeholder="{{ __('10') }}" min="1" step="0.01" required />
                                            @if ($errors->has('food_rarity'))
                                                <span id="food_rarity-error" class="error text-danger" for="input-food_rarity">{{ $errors->first('food_rarity') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Avatar') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('avatar') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" id="input-avatar" type="file" />
                                            @if ($errors->has('avatar'))
                                                <span id="avatar-error" class="error text-danger" for="input-avatar">{{ $errors->first('avatar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-sm-7">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Food Item') }}</button>
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
            axios.get('{{route("cm3.food-items.index")}}')
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
