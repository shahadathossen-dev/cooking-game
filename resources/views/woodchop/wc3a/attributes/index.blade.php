@extends('layouts.frontend', ['activePage' => 'attribute-management', 'titlePage' => __('Attributes Management')])
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
                        <a href="{{ route('woodchop.wc3a.attributes.edit', $attribute) }}"
                            class="btn btn-sm btn-primary text-white">{{ __('Edit Attribute') }}</a>
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
                        @if ($attribute)
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
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
                                                        {{ __('Branch Frequency') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->branch_freq }}
                                                    </td>
                                                    <th>
                                                        {{ __('Cat Frequency') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->cat_freq }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Cat Weight') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->cat_weight }}
                                                    </td>
                                                    <th>
                                                        {{ __('Gravity') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->gravity }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Friction') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->friction }}
                                                    </td>
                                                    <th>
                                                        {{ __('Base Score') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->base_score }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Chop Interval') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->min_score }}
                                                    </td>
                                                    <th>
                                                        {{ __('Wood Score') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->wood_score }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Wood Currency') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->wood_currency }}
                                                    </td>
                                                    <th>
                                                        {{ __('Cat Currency') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->cat_currency }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Gameplay Time') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->game_play_time }}
                                                    </td>
                                                    <th>
                                                        {{ __('Record Time') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->record_time }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Cat Score') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->cat_score }}
                                                    </td>
                                                    <th>
                                                        {{ __('Update time') }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->update_time }}
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
                    superUser: '{{ auth()->user()->role_id === 1 }}',
                };
            },
            filters: {
                // something
            },
            methods: {
                // something
            },
            mounted() {
                // something
            },
            created() {
                // something
            }
        })

    </script>
@endpush
