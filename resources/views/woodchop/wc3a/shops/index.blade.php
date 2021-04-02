@extends('layouts.frontend', ['activePage' => 'shop-management', 'titlePage' => __('User Management')])
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
        <v-col cols="12">
            <v-card>
                <div class="card-header card-header-primary content-header">
                    <h4 class="card-title">{{ __('Ingredients') }}</h4>
                    <a href="{{ route('woodchop.wc3a.shops.create') }}" class="btn btn-sm btn-primary text-white">{{ __('Add shop') }}</a>
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
                                    {{ __('Wood Score') }}
                                </th>
                                <th>
                                    {{ __('Cat. Score') }}
                                </th>
                                <th>
                                    {{ __('Wood Curr') }}
                                </th>
                                <th>
                                    {{ __('Cat. Curr') }}
                                </th>
                                <th>
                                    {{ __('Physics Val') }}
                                </th>

                                <th>
                                    {{ __('Wood Cost') }}
                                </th>
                                <th>
                                    {{ __('Cat. Cost') }}
                                </th>
                                <th>{{ __('Avatar') }}</th>
                                <th>{{ __('Ver') }}</th>
                                <th>
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                                @foreach($shops as $shop)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $shop->shop_name }}
                                    </td>
                                    <td>
                                        {{ $shop->wood_score }}
                                    </td>
                                    <td>
                                        {{ $shop->cat_score }}
                                    </td>
                                    <td>
                                        {{ $shop->wood_currency }}
                                    </td>
                                    <td>
                                        {{ $shop->cat_currency }}
                                    </td>
                                    <td>
                                        {{ $shop->wood_cost }}
                                    </td>
                                    <td>
                                        {{ $shop->cat_cost }}
                                    </td>
                                    <td>
                                        {{ $shop->physics_val }}
                                    </td>
                                    <td>
                                        <img style="max-width: 100px;" src="{{ $shop->img_link }}" alt="{{$shop->ing}} avatar">
                                    </td>
                                    <td>
                                        {{ $shop->ver }}
                                    </td>
                                    {{-- <td>
                                        {{ $shop->create_time->format('Y-m-d') }}
                                    </td> --}}
                                    <td class="td-actions text-right">
                                    <form action="{{ route('woodchop.wc3a.shops.destroy', $shop) }}" method="post">
                                            @csrf

                                            <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('woodchop.wc3a.shops.edit', $shop) }}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete shop" onclick="confirm('Are you sure you want to delete the shop?') ? this.parentElement.submit() : event.preventDefault()">
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
