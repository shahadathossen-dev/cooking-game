@extends('layouts.frontend', ['activePage' => 'ingredients-prirority-management', 'titlePage' => __('Ingredients Priroty Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('cm1b.ingredient-priority.update', $ingredient) }}" autocomplete="off" class="form-horizontal">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Ingredient Priority') }}</h4>
                        <a href="{{ route('cm1b.ingredient-priority.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">

                            <div class="row">
                                <label for="ing" class="col-sm-2 col-form-label">{{ __('Ingredient') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('ing') ? 'has-danger' : '' }}">
                                        <select name="ing" id="ing"  class="form-control {{ $errors->has('ing') ? 'is-invalid' : '' }}" required>
                                            <option disabled>Select Ingredient Name</option>
                                            @foreach($ingredients_list as $item)
                                                @if ($item['name'] === $ingredient->ing)
                                                    <option value="{{$item['name']}}" selected>{{$item['name']}}</option>
                                                @else
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endif
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
                                        <input class="form-control{{ $errors->has('priority') ? ' is-invalid' : '' }}" name="priority" id="input-priority" type="number" value="{{ $ingredient->priority }}" placeholder="{{ __('1.00') }}" min="1" step="0.01" required />
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
    data() {
        return {
            drawer: false,
            proecssing: false,
        };
    },
});
</script>
@endpush
