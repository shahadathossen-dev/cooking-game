@extends('layouts.frontend', ['activePage' => 'plate-management', 'titlePage' => __('Plates Management')])

@section('content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('cm3.plates.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Add Plates') }}</h4>
                            <a href="{{ route('cm3.plates.index') }}" class="btn btn-sm btn-primary text-white">{{ __('Back to list') }}</a>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Plate Color') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('plate_color') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('plate_color') ? ' is-invalid' : '' }}" name="plate_color" id="input-plate_color" type="text" placeholder="{{ __('Plate Color') }}" value="{{ old('plate_color') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('plate_color'))
                                                <span id="plate_color-error" class="error text-danger" for="input-plate_color">{{ $errors->first('plate_color') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Plate Money') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('plate_money') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('plate_money') ? ' is-invalid' : '' }}" name="plate_money" id="input-plate_money" type="number" placeholder="{{ __('1') }}" required />
                                            @if ($errors->has('plate_money'))
                                                <span id="plate_money-error" class="error text-danger" for="input-plate_money">{{ $errors->first('plate_money') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Plate Happy') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('plate_happy') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('plate_happy') ? ' is-invalid' : '' }}" name="plate_happy" id="input-plate_happy" type="number" placeholder="{{ __('10') }}" required />
                                            @if ($errors->has('plate_happy'))
                                                <span id="plate_happy-error" class="error text-danger" for="input-plate_happy">{{ $errors->first('plate_happy') }}</span>
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
                                            <button type="submit" class="btn btn-primary ml-auto">{{ __('Save Plate') }}</button>
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
        roles: [],
    },
    filters: {},
    methods:{
        // this.getRoles();
    },
    mounted(){
        // this.getRoles();
    },
})
</script>
@endpush
