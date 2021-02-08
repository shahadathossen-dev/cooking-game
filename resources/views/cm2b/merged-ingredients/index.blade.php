@extends('layouts.frontend', ['activePage' => 'ingredient-management', 'titlePage' => __('User Management')])
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
        <v-col md="12" sm="12">
            <v-card>
                <div class="card-header card-header-primary content-header">
                    <h4 class="card-title">{{ __('Merged Ingredients') }}</h4>
                    <a href="{{ route('cm2b.merged-ingredients.create') }}" class="btn btn-sm btn-primary text-white">{{ __('Add ingredient') }}</a>
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
                                    {{ __('1st Ingredient') }}
                                </th>
                                <th>
                                    {{ __('2nd Ingredient') }}
                                </th>
                                <th>
                                    {{ __('Multiplier') }}
                                </th>
                                <th>
                                    {{ __('Item Name') }}
                                </th>
                                <th>
                                    {{ __('Avatar') }}
                                </th>
                                <th>
                                    {{ __('Creation date') }}
                                </th>
                                <th>
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                                @foreach($ingredients as $ingredient)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>

                                    <td>
                                        {{ $ingredient->ing1 }}
                                    </td>
                                    <td>
                                        {{ $ingredient->ing2 }}
                                    </td>
                                    <td>
                                        {{ $ingredient->multi }}
                                    </td>
                                    <td>
                                        {{ $ingredient->new_item }}
                                    </td>
                                    <td>
                                        <img style="max-width: 100px;" src="{{ $ingredient->photo_link }}" alt="{{$ingredient->ing}} avatar">
                                    </td>
                                    <td>
                                        {{ $ingredient->crete_time->format('Y-m-d') }}
                                    </td>
                                    <td class="td-actions text-right">
                                    <form action="{{ route('cm2b.merged-ingredients.destroy', $ingredient) }}" method="post">
                                            @csrf

                                            <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('cm2b.merged-ingredients.edit', $ingredient) }}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete ingredient" onclick="confirm('Are you sure you want to delete the ingredient?') ? this.parentElement.submit() : event.preventDefault()">
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
