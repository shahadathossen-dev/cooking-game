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
                        @if ($attributes)
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
                                                        {{ __('Action') }}
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($arrtibutes as $attribute)
                                                <tr>
                                                    <th>
                                                        {{ $attribute->attr_name }}
                                                    </th>
                                                    <td>
                                                        {{ $attribute->attr_value }}
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <form action="{{ route('dungeon-cleaner.attributes.destroy', $attribute) }}"
                                                            method="post">
                                                            @csrf

                                                            <a rel="tooltip" class="btn btn-success btn-sm"
                                                                href="{{ route('dungeon-cleaner.attributes.edit', $attribute) }}"
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
