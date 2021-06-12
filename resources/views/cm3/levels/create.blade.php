@extends('layouts.frontend', ['activePage' => 'levels-management', 'titlePage' => __('Levels Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('cm3.levels.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Lveel') }}</h4>
                            <a href="{{ route('cm3.levels.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                {{-- <div class="row">
                                    <label for="ing" class="col-sm-2 col-form-label">{{ __('Level') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group {{ $errors->has('ing') ? 'has-danger' : '' }}">
                                            <select name="ing" id="ing"  class="form-control {{ $errors->has('ing') ? 'is-invalid' : '' }}" required>
                                                <option disabled selected>Select Level</option>
                                                @foreach($ingredients_list as $item)
                                                <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('ing'))
                                                <span id="ing-error" class="error text-danger" for="input-ing">{{ $errors->first('ing') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Lavel Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('lvl_name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('lvl_name') ? ' is-invalid' : '' }}" name="lvl_name" id="input-lvl_name" type="text" placeholder="{{ __('Level name') }}" required />
                                            @if ($errors->has('lvl_name'))
                                                <span id="lvl_name-error" class="error text-danger" for="input-lvl_name">{{ $errors->first('lvl_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Level Score') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('lvl_score') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('lvl_score') ? ' is-invalid' : '' }}" name="lvl_score" id="input-lvl_score" type="number" placeholder="{{ __('10') }}" min="1" step="0.01" required />
                                            @if ($errors->has('lvl_score'))
                                                <span id="lvl_score-error" class="error text-danger" for="input-lvl_score">{{ $errors->first('lvl_score') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-sm-7">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Level') }}</button>
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
    },
    mounted(){
        // this.getIngredients();
    },
})
</script>
@endpush
