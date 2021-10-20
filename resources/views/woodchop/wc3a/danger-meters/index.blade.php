@extends('layouts.frontend', ['activePage' => 'danger-meter-management', 'titlePage' => __('Danger Meter Management')])
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
                        <h4 class="card-title">{{ __('Danger Meter') }}</h4>
                        <a href="{{ route('woodchop.wc3a.danger-meter.create') }}"
                            class="btn btn-sm btn-primary text-white">{{ __('Add Danger Meter') }}</a>
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
                                        {{ __('Color') }}
                                    </th>
                                    <th>
                                        {{ __('Left') }}
                                    </th>
                                    <th>
                                        {{ __('Right') }}
                                    </th>
                                    <th>
                                        {{ __('Front') }}
                                    </th>
                                    <th>
                                        {{ __('Back') }}
                                    </th>
                                    <th>
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($dangerMeters as $dangerMeter)
                                        <tr>
                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                {{ $dangerMeter->color }}
                                            </td>
                                            <td>
                                                {{ $dangerMeter->left }}
                                            </td>
                                            <td>
                                                {{ $dangerMeter->right }}
                                            </td>
                                            <td>
                                                {{ $dangerMeter->front }}
                                            </td>
                                            <td>
                                                {{ $dangerMeter->back }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('woodchop.wc3a.danger-meter.destroy', $dangerMeter) }}"
                                                    method="post">
                                                    @csrf

                                                    <a rel="tooltip" class="btn btn-success btn-sm"
                                                        href="{{ route('woodchop.wc3a.danger-meter.edit', $dangerMeter) }}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        data-original-title="" title="Delete Danger Meter"
                                                        onclick="confirm('Are you sure you want to delete the Danger Meter?') ? this.parentElement.submit() : event.preventDefault()">
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
