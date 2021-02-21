@extends('layouts.frontend', ['activePage' => 'deck-management', 'titlePage' => __('Map Management')])
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
                    <h4 class="card-title">{{ __('Islands') }}</h4>
                    <a href="{{ route('mbv1.decks.create') }}" class="btn btn-sm btn-primary text-white">{{ __('Add Deck') }}</a>
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
                                    {{ __('Description') }}
                                </th>
                                <th>
                                    {{ __('Type') }}
                                </th>
                                <th>
                                    {{ __('Power') }}
                                </th>
                                <th>
                                    {{ __('Health') }}
                                </th>
                                <th>
                                    {{ __('Gold') }}
                                </th>
                                <th>
                                    {{ __('Special') }}
                                </th>
                                <th>
                                    {{ __('Creation date') }}
                                </th>
                                <th>
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                                @foreach($decks as $deck)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_name }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_description }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_type }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_power }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_health }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_gold }}
                                    </td>
                                    <td>
                                        {{ $deck->deck_special }}
                                    </td>
                                    {{-- <td>
                                        <img style="max-width: 100px;" src="{{ $deck->ing_photo_link }}" alt="{{$deck->ing}} avatar">
                                    </td> --}}
                                    <td>
                                        {{ $deck->create_time->format('Y-m-d') }}
                                    </td>
                                    <td class="td-actions text-right">
                                    <form action="{{ route('mbv1.decks.destroy', $deck) }}" method="post">
                                            @csrf

                                            <a rel="tooltip" class="btn btn-success btn-sm" href="{{ route('mbv1.decks.edit', $deck) }}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete deck" onclick="confirm('Are you sure you want to delete the deck?') ? this.parentElement.submit() : event.preventDefault()">
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
