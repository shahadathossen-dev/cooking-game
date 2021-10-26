@extends('layouts.frontend', ['activePage' => 'attributes-management', 'titlePage' => __('Atribute Management')])
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
                        <h4 class="card-title">{{ __('Atribute') }}</h4>
                        <a href="{{ route('woodchop.wc3a.attributes.create') }}"
                            class="btn btn-sm btn-primary text-white">{{ __('Add Atribute') }}</a>
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
                                        {{ __('Attribute') }}
                                    </th>
                                    <th>
                                        {{ __('Value') }}
                                    </th>
                                    <th>
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                @if (count($attributes))
                                    <tbody>
                                        @foreach ($attributes as $attribute)
                                            <tr>
                                                <td>
                                                    {{ $loop->index + 1 }}
                                                </td>
                                                <td>
                                                    {{ $attribute->attr_name }}
                                                </td>
                                                <td>
                                                    {{ $attribute->attr_value }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <form
                                                        action="{{ route('woodchop.wc3a.attributes.destroy', $attribute) }}"
                                                        method="post">
                                                        @csrf

                                                        <a rel="tooltip" class="btn btn-success btn-sm"
                                                            href="{{ route('woodchop.wc3a.attributes.edit', $attribute) }}"
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
                                @endif
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
