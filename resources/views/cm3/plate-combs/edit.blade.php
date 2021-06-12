@extends('layouts.frontend', ['activePage' => 'plate-comb-management', 'titlePage' => __('Plate Combinations Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{ route('cm3.plate-combs.update', $plate_comb) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card ">
                    <div class="card-header card-header-primary content-header">
                        <h4 class="card-title">{{ __('Edit Plate Combinations') }}</h4>
                        <a href="{{ route('cm3.plate-combs.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                    </div>
                    <div class="card-body ">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Plate Combinations Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('new_plate') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('new_plate') ? ' is-invalid' : '' }}" name="new_plate" id="input-new_plate" type="text" placeholder="{{ __('Plate Combinations Name') }}" value="{{ $plate_comb->new_plate }}" required aria-required="true"/>
                                        @if ($errors->has('new_plate'))
                                            <span id="new_plate-error" class="error text-danger" for="input-new_plate">{{ $errors->first('new_plate') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="ing1" class="col-sm-2 col-form-label">{{ __('1st Plate') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('plate1') ? 'has-danger' : '' }}">
                                        <select name="plate1" id="plate1"  class="form-control {{ $errors->has('plate1') ? 'is-invalid' : '' }}" required>
                                            <option disabled>Select 1st Plate</option>
                                            @foreach($plates_list as $item)
                                                @if ($item['name'] === $plate_comb->plate1)
                                                    <option value="{{$item['name']}}" selected>{{$item['name']}}</option>
                                                @else
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('plate1'))
                                            <span id="plate1-error" class="error text-danger" for="input-plate1">{{ $errors->first('plate1') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="plate2" class="col-sm-2 col-form-label">{{ __('1st Plate') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('plate2') ? 'has-danger' : '' }}">
                                        <select name="plate2" id="plate2"  class="form-control {{ $errors->has('plate2') ? 'is-invalid' : '' }}" required>
                                            <option disabled>Select 2nd Plate</option>
                                            @foreach($plates_list as $item)
                                                @if ($item['name'] === $plate_comb->plate2)
                                                    <option value="{{$item['name']}}" selected>{{$item['name']}}</option>
                                                @else
                                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('plate2'))
                                            <span id="plate2-error" class="error text-danger" for="input-plate2">{{ $errors->first('plate2') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-sm-7">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Plate Combinations') }}</button>
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
