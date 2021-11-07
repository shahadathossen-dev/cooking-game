@extends('layouts.frontend', ['activePage' => 'configs-management', 'titlePage' => __('Configs Management')])
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
                <div v-if="message" class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" @click="message = ''" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>@{{ message }}</span>
                        </div>
                    </div>
                </div>
                <form @submit.prevent="handleSubmit" method="post" action="{{ route('woodchop.wc3a.configs.store') }}"
                    enctype="multipart/form-data" autocomplete="off">
                    <div class="card">
                        <div class="card-header card-header-primary content-header">
                            <h3 class="card-title">{{ __('Update Config [JSON]') }}</h3>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ml-auto">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <textarea id="data" class="form-control" v-model="config" style="height: calc(100vh - 250px);">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </form>
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
                    superUser: '{{ auth()->user()->role_id === 1 }}',
                    message: '',
                    config: ''
                };
            },
            filters: {},
            methods: {
                parseJson(jsonObj) {
                    return JSON.stringify(jsonObj, undefined, 4)
                },

                async handleSubmit(event) {
                    event.preventDefault()
                    const payload = {
                        data: JSON.stringify(JSON.parse(this.config))
                    }

                    try {
                        const res = await axios.post('/api/woodchop/wc3a/configs', payload)
                        this.message = res.data.message
                        this.config = this.parseJson(res.data.data);
                    } catch (error) {
                        console.log(error);
                    }
                },
                async getConfig() {
                    try {
                        const { data } = await axios.get('/api/woodchop/wc3a/configs')
                        this.config = this.parseJson(data);
                    } catch (error) {
                        console.log(error);
                    }
                }
            },
            mounted() {
                this.getConfig()
            },
            created() {
                // something
            }
        })
    </script>
@endpush
