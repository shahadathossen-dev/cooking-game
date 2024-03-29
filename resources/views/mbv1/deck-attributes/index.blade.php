@extends('layouts.frontend', ['activePage' => 'deck-attribute-management', 'titlePage' => __('Deck Attribute Management')])
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
                    <a v-if="{{$attribute}}" href="{{ route('mbv1.deck-attributes.edit', $attribute) }}" class="btn btn-sm btn-primary text-white">{{ __('Edit Attribute') }}</a>
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
                                                {{ __('Minion') }}
                                            </th>
                                            <td>
                                                {{ $attribute->minion }}
                                            </td>
                                            <th>
                                                {{ __('Effect') }}
                                            </th>
                                            <td>
                                                {{ $attribute->effect }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Deck') }}
                                            </th>
                                            <td>
                                                {{ $attribute->deck }}
                                            </td>
                                            <th>
                                                {{ __('Player Health') }}
                                            </th>
                                            <td>
                                                {{ $attribute->playerhealth }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Current Gold') }}
                                            </th>
                                            <td>
                                                {{ $attribute->currentgold }}
                                            </td>
                                            <th>
                                                {{ __('Current Health') }}
                                            </th>
                                            <td>
                                                {{ $attribute->currenthealth }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">
                                                {{ __('Creation Date') }}
                                            </th>
                                            <td colspan="2">
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
