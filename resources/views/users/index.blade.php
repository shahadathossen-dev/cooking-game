@extends('layouts.frontend', ['activePage' => 'user-management', 'titlePage' => __('User Management')])
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
                    <h4 class="card-title">{{ __('Users') }}</h4>
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary text-white">{{ __('Add user') }}</a>
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
                                    {{ __('Name') }}
                                </th>
                                <th>
                                    {{ __('Email') }}
                                </th>
                                <th>
                                    {{ __('Role') }}
                                </th>
                                <th>
                                    {{ __('Creation date') }}
                                </th>
                                <th class="text-right">
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->role->name }}
                                    </td>
                                    <td>
                                        {{ $user->created_at->format('Y-m-d') }}
                                    </td>
                                    <td class="td-actions text-right">
                                    <form action="{{ route('users.destroy', $user) }}" method="post">
                                            @csrf

                                            <a rel="tooltip" class="btn btn-success btn-sm {{$user->role_id === 1 ? 'disabled' : ''}}" href="{{ route('users.edit', $user) }}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        
                                            <button type="submit" class="btn btn-danger btn-sm" data-original-title="" title="Delete user" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : event.preventDefault()">
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
            superUser: '{{$user->role_id === 1}}',
        };
    },
    filters: {

    },
    methods:{},
    mounted(){

    },
    created(){
    }
})
</script>
@endpush
