@extends('layouts.frontend', ['activePage' => 'island-size-management', 'titlePage' => __('Island Size Management')])
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
                    <h4 class="card-title">{{ __('Island Sizes') }}</h4>
                    <a href="{{ route('v1is.island-sizes.create') }}" class="btn btn-sm btn-primary text-white">{{ __('Add island size') }}</a>
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
                                    {{ __('Min') }}
                                </th>
                                <th>
                                    {{ __('Max') }}
                                </th>
                                <th>
                                    {{ __('Creation date') }}
                                </th>
                                <th>
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                                @foreach($islandSizes as $islandSize)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $islandSize->is_name }}
                                    </td>
                                    <td>
                                        {{ $islandSize->is_min }}
                                    </td>
                                    <td>
                                        {{ $islandSize->is_max }}
                                    </td>
                                    <td>
                                        {{ $islandSize->create_time->format('Y-m-d') }}
                                    </td>
                                    <td class="td-actions text-right">
                                    <form action="{{ route('v1is.island-sizes.destroy', $islandSize) }}" method="post">
                                            @csrf

                                            <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('v1is.island-sizes.edit', $islandSize) }}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete island" onclick="confirm('Are you sure you want to delete the island?') ? this.parentElement.submit() : event.preventDefault()">
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
