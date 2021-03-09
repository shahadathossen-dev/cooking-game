@extends('layouts.frontend', ['activePage' => 'island-attribute-management', 'titlePage' => __('Island Attribute Management')])
@push('styles')
<style>
.table tr td {
    vertical-align: middle;
}

</style>
@endpush
@section('content')

<v-container>
    <v-row class="justify-content-center">
        <v-col md="10" sm="12">
            <v-card>
                <div class="card-header card-header-primary content-header">
                    <h4 class="card-title">{{ __('Attributes') }}</h4>
                    <a v-if="{{$attribute}}" href="{{ route('v1is.island-attributes.edit', $attribute) }}" class="btn btn-sm btn-primary text-white">{{ __('Edit Attribute') }}</a>
                </div>
                <div class="card-body">

                    @if (session('status'))
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                        </div>
                        </div>
                    </div>
                    @endif
                    @if($attribute)
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                {{-- <div class="td-actions text-right">
                                    <form action="{{ route('v1is.attributes.destroy', $attribute) }}" method="post">
                                        @csrf

                                        <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('v1is.attributes.edit', $attribute) }}" data-original-title="" title="">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete attribute" onclick="confirm('Are you sure you want to delete the attribute?') ? this.parentElement.submit() : event.preventDefault()">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </form>
                                </div> --}}

                                <table class="table table-stripped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                {{ __('Attribute') }}
                                            </th>
                                            <th>
                                                {{ __('Value') }}
                                            </th>
                                            <th>
                                                {{ __('Attribute') }}
                                            </th>
                                            <th>
                                                {{ __('Value') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ __('Camera Distance') }}
                                            </th>
                                            <td>
                                                {{ $attribute->timer }}
                                            </td>
                                            <th>
                                                {{ __('Move Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandmovespeed }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Accelerate Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandacceleratespeed }}
                                            </td>
                                            <th>
                                                {{ __('Decelerate Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islanddeceleratespeed }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Speed Penalty') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandspeedpenalty }}
                                            </td>
                                            <th>
                                                {{ __('Island Size Small') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandsize_small }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Island Size Medium') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandsize_medium }}
                                            </td>
                                            <th>
                                                {{ __('Island Size Big') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandsize_big }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Island Size Boss') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandsize_boss }}
                                            </td>
                                            <th>
                                                {{ __('Grow Chance Red') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandgrowchance_red }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grow Chance Grey') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandgrowchance_grey }}
                                            </td>
                                            <th>
                                                {{ __('Grow Chance Blue') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandgrowchance_blue }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grow Chance Yellow') }}
                                            </th>
                                            <td>
                                                {{ $attribute->islandgrowchance_yellow }}
                                            </td>
                                            <th>
                                                {{ __('Zone 1 Spawn Small') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone1_small }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Zone 2 Spawn Small') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone2_small }}
                                            </td>
                                            <th>
                                                {{ __('Zone 3 Spawn Small') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone3_small }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Zone 1 Spawn Medium') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone1_medium }}
                                            </td>
                                            <th>
                                                {{ __('Zone 2 Spawn Medium') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone2_medium }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Zone 3 Spawn Medium') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone3_medium }}
                                            </td>
                                            <th>
                                                {{ __('Zone 1 Spawn Big') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone1_big }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Zone 2 Spawn Big') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone2_big }}
                                            </td>
                                            <th>
                                                {{ __('Zone 3 Spawn Big') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone3_big }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Zone 1 Spawn Boss') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone1_boss }}
                                            </td>
                                            <th>
                                                {{ __('Zone 2 Spawn Boss') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone2_boss }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Zone 3 Spawn Boss') }}
                                            </th>
                                            <td>
                                                {{ $attribute->mapspawn_zone3_boss }}
                                            </td>
                                            <th>
                                                {{ __('Creation Date') }}
                                            </th>
                                            <td>
                                                {{ $attribute->create_time }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </v-card>
        </v-col>
    </v-row>
</v-container>
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
            superUser: '{{auth()->user()->role_id === 1}}',
        };
    },
    filters: {
        // something
    },
    methods:{
        // something
    },
    mounted(){
        // something
    },
    created(){
        // something
    }
})
</script>
@endpush
