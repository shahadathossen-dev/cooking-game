@extends('layouts.frontend', ['activePage' => 'ingredient-management', 'titlePage' => __('Ingredient Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('cm1b.merged-ingredients.update', $ingredient) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Ingredient') }}</h4>
                        <a href="{{ route('cm1b.merged-ingredients.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Ingredient Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('new_item') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('new_item') ? ' is-invalid' : '' }}" name="new_item" id="input-new_item" type="text" placeholder="{{ __('Ingredient Name') }}" value="{{ $ingredient->new_item }}" required aria-required="true"/>
                                        @if ($errors->has('new_item'))
                                            <span id="new_item-error" class="error text-danger" for="input-new_item">{{ $errors->first('new_item') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="ing1" class="col-sm-2 col-form-label">{{ __('1st Ingredient') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('ing1') ? 'has-danger' : '' }}">
                                        <select name="ing1" id="ing1"  class="form-control {{ $errors->has('ing1') ? 'is-invalid' : '' }}" required>
                                            <option disabled>Select 1st Ingredient</option>
                                            @foreach($ingredients_list as $item)
                                                @if ($item['name'] === $ingredient->ing1)
                                                    <option value="{{$item['name']}}" selected>{{$item['name']}}</option>
                                                @else
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('ing1'))
                                            <span id="ing1-error" class="error text-danger" for="input-ing1">{{ $errors->first('ing1') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="ing2" class="col-sm-2 col-form-label">{{ __('1st Ingredient') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('ing2') ? 'has-danger' : '' }}">
                                        <select name="ing2" id="ing2"  class="form-control {{ $errors->has('ing2') ? 'is-invalid' : '' }}" required>
                                            <option disabled>Select 2nd Ingredient</option>
                                            @foreach($ingredients_list as $item)
                                                @if ($item['name'] === $ingredient->ing2)
                                                    <option value="{{$item['name']}}" selected>{{$item['name']}}</option>
                                                @else
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('ing2'))
                                            <span id="ing2-error" class="error text-danger" for="input-ing2">{{ $errors->first('ing2') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Mulitiplier') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('multi') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('multi') ? ' is-invalid' : '' }}" name="multi" id="input-multi" type="number" value="{{ $ingredient->multi }}" placeholder="{{ __('1.00') }}" min="1" step="0.01" required />
                                        @if ($errors->has('multi'))
                                            <span id="multi-error" class="error text-danger" for="input-multi">{{ $errors->first('multi') }}</span>
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
        };
    },
});
</script>
@endpush
