@extends('layouts.frontend', ['activePage' => 'food-item-management', 'titlePage' => __('FoodItem Priroty Management')])
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
                    <h4 class="card-title">{{ __('FoodItem Priority') }}</h4>
                    <a href="{{ route('cm3.food-items.create') }}" class="btn btn-sm btn-primary text-white">{{ __('Add fooditem Priority') }}</a>
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
                    <div class="table-responsive">
                        <table class="table table-stripped table-bordered">
                            <thead class="thead-dark">
                                <th>
                                    {{ __('Sl. No.') }}
                                </th>

                                <th>
                                    {{ __('Name') }}
                                </th>

                                <th>
                                    {{ __('Rarity') }}
                                </th>
                                <th>
                                    {{ __('Color') }}
                                </th>
                                <th>
                                    {{ __('Avatar') }}
                                </th>
                                <th>
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                                @foreach($food_items as $food_item)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>

                                    <td>
                                        {{ $food_item->food_name }}
                                    </td>

                                    <td>
                                        {{ $food_item->food_rarity }}
                                    </td>
                                    <td>
                                        {{ $food_item->plate_color }}
                                    </td>
                                    <td>
                                        <img style="max-width: 100px;" src="{{ $food_item->food_url }}" alt="Food item avatar">
                                    </td>
                                    <td class="td-actions text-right">
                                    <form action="{{ route('cm3.food-items.destroy', $food_item) }}" method="post">
                                        @csrf

                                        <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('cm3.food-items.edit', $food_item) }}" data-original-title="" title="">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete food_items" onclick="confirm('Are you sure you want to delete the food item?') ? this.parentElement.submit() : event.preventDefault()">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
