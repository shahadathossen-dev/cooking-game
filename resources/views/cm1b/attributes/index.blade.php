@extends('layouts.frontend', ['activePage' => 'attribute-management', 'titlePage' => __('User Management')])
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
                    <a href="{{ route('cm1b.attributes.edit', $attribute) }}" class="btn btn-sm btn-primary text-white">{{ __('Edit Attribute') }}</a>
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
                                    <form action="{{ route('cm1b.attributes.destroy', $attribute) }}" method="post">
                                        @csrf

                                        <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('cm1b.attributes.edit', $attribute) }}" data-original-title="" title="">
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
                                                {{ __('Hungry Time') }}
                                            </th>
                                            <td>
                                                {{ $attribute->hungry_time }}
                                            </td>
                                            <th>
                                                {{ __('Timer') }}
                                            </th>
                                            <td>
                                                {{ $attribute->timer }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Dispenser Start Freq.') }}
                                            </th>
                                            <td>
                                                {{ $attribute->dispenser_start_freq }}
                                            </td>
                                            <th>
                                                {{ __('Dispenser End Freq.') }}
                                            </th>
                                            <td>
                                                {{ $attribute->dispenser_end_freq }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Conveyor Start Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor_start_speed }}
                                            </td>
                                            <th>
                                                {{ __('Conveyor End Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor_start_speed }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Conveyor1 Start Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor1_start_speed }}
                                            </td>
                                            <th>
                                                {{ __('Conveyor1 End Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor1_start_speed }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Conveyor2 Start Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor2_start_speed }}
                                            </td>
                                            <th>
                                                {{ __('Conveyor2 End Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor2_start_speed }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Conveyor3 Start Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor3_start_speed }}
                                            </td>
                                            <th>
                                                {{ __('Conveyor3 End Speed') }}
                                            </th>
                                            <td>
                                                {{ $attribute->conveyor3_start_speed }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Trash Can Size') }}
                                            </th>
                                            <td>
                                                {{ $attribute->trash_can_size }}
                                            </td>
                                            <th>
                                                {{ __('Starting Happiness') }}
                                            </th>
                                            <td>
                                                {{ $attribute->starting_happiness }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grade Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_score }}
                                            </td>
                                            <th>
                                                {{ __('Bad Food Multiplier') }}
                                            </th>
                                            <td>
                                                {{ $attribute->bad_food_multi }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grade A Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_A }}
                                            </td>
                                            <th>
                                                {{ __('Grade B Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_B }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grade C Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_C }}
                                            </td>
                                            <th>
                                                {{ __('Grade D Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_D }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grade E Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_E }}
                                            </td>
                                            <th>
                                                {{ __('Grade F Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_F }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ __('Grade S Score') }}
                                            </th>
                                            <td>
                                                {{ $attribute->grade_S }}
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
