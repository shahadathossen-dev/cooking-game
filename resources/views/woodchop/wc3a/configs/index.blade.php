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
                <form @submit.prevent="handleSubmit" method="post" action="{{ route('woodchop.wc3a.configs.store') }}" enctype="multipart/form-data"
                    autocomplete="off">
                    <div class="card">
                        <div class="card-header card-header-primary content-header">
                            <h4 class="card-title">{{ __('Update Config') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- @foreach ($configs as $config)
                            <div class="float-right">{{ $config->version }}</div>
                            <div class="table-responsive">
                                <textarea name="" id="" class="w-100" style="height: calc(100vh - 250px);">
                                    {{ json_encode($config->data) }}
                                </textarea>
                            </div>
                            @endforeach --}}
                            <div class="form-group">
                                <label for="version">Config Version</label>
                                <input id="version" class="form-control" type="text" v-model="config.version">
                            </div>
                            <div class="form-group">
                                <label for="version">Config Data [JSON]</label>
                                <textarea id="data" class="form-control"
                                    style="height: calc(100vh - 250px);" v-model="config.data">
                                    {{-- @{{ parseJson(config.data) }} --}}
                                </textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ml-auto">
                                    {{ __('Save') }}
                                </button>
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
                    jsonParsed: '',
                    config: {
                        data: '',
                        version: ''
                    }
                };
            },
            filters: {
                // parseJson(jsonObj) {
                //     return JSON.stringify(jsonObj, undefined, 4)
                // }
            },
            methods: {
                parseJson(jsonObj) {
                    return JSON.stringify(jsonObj, undefined, 4)
                },

                async handleSubmit(event) {
                    event.preventDefault()
                    const payload = {
                        version: this.config.version,
                        // data: this.config.data,
                        data: JSON.parse(this.config.data)
                    }

                    try {
                        const res = await axios.post('/api/woodchop/wc3a/configs', payload)
                        // this.config = res.data;
                        const config = res.data;
                        this.config.version = config.version;
                        this.config.data = this.parseJson(config.data);
                    } catch (error) {
                        console.log(error);
                    }
                }
            },
            async mounted() {
                try {
                    const res = await axios.get('/api/woodchop/wc3a/configs/1')
                    // this.config = res.data;
                    const config = res.data;
                    console.log(config.data);
                    this.config.version = config.version;
                    this.config.data = this.parseJson(config.data);
                } catch (error) {
                    console.log(error);
                }
            },
            created() {
                // something
            }
        })
    </script>
@endpush
