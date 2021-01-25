@extends('layouts.frontend', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])


@section('content')
<v-container>
    <v-row class="justify-content-center">
        <v-col md="10" sm="12">
            <v-card>
                <v-card-title>Dashboard</v-card-title>
                <v-card-text>
                    <h4 class="text-center">Buil Something Amazing!</h4>    
                </v-card-text>
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
        };
    },
    watch: {},
    mounted() {
        // console.log(this.hasState(15));
    },
    computed: {
        // console.log(this.hasState(15));
    },
    methods:{},
});
</script>
@endpush