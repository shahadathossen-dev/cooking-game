<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css">
    <style>
        [v-cloak] > * { display:none; }
        [v-cloak]::before {
            content: " ";
            display: block;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBzdGFuZGFsb25lPSJubyI/Pgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHdpZHRoPSI0MHB4IiBoZWlnaHQ9IjQwcHgiIHZpZXdCb3g9IjAgMCA0MCA0MCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWw6c3BhY2U9InByZXNlcnZlIiBzdHlsZT0iZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEuNDE0MjE7IiB4PSIwcHgiIHk9IjBweCI+CiAgICA8ZGVmcz4KICAgICAgICA8c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWwogICAgICAgICAgICBALXdlYmtpdC1rZXlmcmFtZXMgc3BpbiB7CiAgICAgICAgICAgICAgZnJvbSB7CiAgICAgICAgICAgICAgICAtd2Via2l0LXRyYW5zZm9ybTogcm90YXRlKDBkZWcpCiAgICAgICAgICAgICAgfQogICAgICAgICAgICAgIHRvIHsKICAgICAgICAgICAgICAgIC13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGUoLTM1OWRlZykKICAgICAgICAgICAgICB9CiAgICAgICAgICAgIH0KICAgICAgICAgICAgQGtleWZyYW1lcyBzcGluIHsKICAgICAgICAgICAgICBmcm9tIHsKICAgICAgICAgICAgICAgIHRyYW5zZm9ybTogcm90YXRlKDBkZWcpCiAgICAgICAgICAgICAgfQogICAgICAgICAgICAgIHRvIHsKICAgICAgICAgICAgICAgIHRyYW5zZm9ybTogcm90YXRlKC0zNTlkZWcpCiAgICAgICAgICAgICAgfQogICAgICAgICAgICB9CiAgICAgICAgICAgIHN2ZyB7CiAgICAgICAgICAgICAgICAtd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46IDUwJSA1MCU7CiAgICAgICAgICAgICAgICAtd2Via2l0LWFuaW1hdGlvbjogc3BpbiAxLjVzIGxpbmVhciBpbmZpbml0ZTsKICAgICAgICAgICAgICAgIC13ZWJraXQtYmFja2ZhY2UtdmlzaWJpbGl0eTogaGlkZGVuOwogICAgICAgICAgICAgICAgYW5pbWF0aW9uOiBzcGluIDEuNXMgbGluZWFyIGluZmluaXRlOwogICAgICAgICAgICB9CiAgICAgICAgXV0+PC9zdHlsZT4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJvdXRlciI+CiAgICAgICAgPGc+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0yMCwwQzIyLjIwNTgsMCAyMy45OTM5LDEuNzg4MTMgMjMuOTkzOSwzLjk5MzlDMjMuOTkzOSw2LjE5OTY4IDIyLjIwNTgsNy45ODc4MSAyMCw3Ljk4NzgxQzE3Ljc5NDIsNy45ODc4MSAxNi4wMDYxLDYuMTk5NjggMTYuMDA2MSwzLjk5MzlDMTYuMDA2MSwxLjc4ODEzIDE3Ljc5NDIsMCAyMCwwWiIgc3R5bGU9ImZpbGw6YmxhY2s7Ii8+CiAgICAgICAgPC9nPgogICAgICAgIDxnPgogICAgICAgICAgICA8cGF0aCBkPSJNNS44NTc4Niw1Ljg1Nzg2QzcuNDE3NTgsNC4yOTgxNSA5Ljk0NjM4LDQuMjk4MTUgMTEuNTA2MSw1Ljg1Nzg2QzEzLjA2NTgsNy40MTc1OCAxMy4wNjU4LDkuOTQ2MzggMTEuNTA2MSwxMS41MDYxQzkuOTQ2MzgsMTMuMDY1OCA3LjQxNzU4LDEzLjA2NTggNS44NTc4NiwxMS41MDYxQzQuMjk4MTUsOS45NDYzOCA0LjI5ODE1LDcuNDE3NTggNS44NTc4Niw1Ljg1Nzg2WiIgc3R5bGU9ImZpbGw6cmdiKDIxMCwyMTAsMjEwKTsiLz4KICAgICAgICA8L2c+CiAgICAgICAgPGc+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0yMCwzMi4wMTIyQzIyLjIwNTgsMzIuMDEyMiAyMy45OTM5LDMzLjgwMDMgMjMuOTkzOSwzNi4wMDYxQzIzLjk5MzksMzguMjExOSAyMi4yMDU4LDQwIDIwLDQwQzE3Ljc5NDIsNDAgMTYuMDA2MSwzOC4yMTE5IDE2LjAwNjEsMzYuMDA2MUMxNi4wMDYxLDMzLjgwMDMgMTcuNzk0MiwzMi4wMTIyIDIwLDMyLjAxMjJaIiBzdHlsZT0iZmlsbDpyZ2IoMTMwLDEzMCwxMzApOyIvPgogICAgICAgIDwvZz4KICAgICAgICA8Zz4KICAgICAgICAgICAgPHBhdGggZD0iTTI4LjQ5MzksMjguNDkzOUMzMC4wNTM2LDI2LjkzNDIgMzIuNTgyNCwyNi45MzQyIDM0LjE0MjEsMjguNDkzOUMzNS43MDE5LDMwLjA1MzYgMzUuNzAxOSwzMi41ODI0IDM0LjE0MjEsMzQuMTQyMUMzMi41ODI0LDM1LjcwMTkgMzAuMDUzNiwzNS43MDE5IDI4LjQ5MzksMzQuMTQyMUMyNi45MzQyLDMyLjU4MjQgMjYuOTM0MiwzMC4wNTM2IDI4LjQ5MzksMjguNDkzOVoiIHN0eWxlPSJmaWxsOnJnYigxMDEsMTAxLDEwMSk7Ii8+CiAgICAgICAgPC9nPgogICAgICAgIDxnPgogICAgICAgICAgICA8cGF0aCBkPSJNMy45OTM5LDE2LjAwNjFDNi4xOTk2OCwxNi4wMDYxIDcuOTg3ODEsMTcuNzk0MiA3Ljk4NzgxLDIwQzcuOTg3ODEsMjIuMjA1OCA2LjE5OTY4LDIzLjk5MzkgMy45OTM5LDIzLjk5MzlDMS43ODgxMywyMy45OTM5IDAsMjIuMjA1OCAwLDIwQzAsMTcuNzk0MiAxLjc4ODEzLDE2LjAwNjEgMy45OTM5LDE2LjAwNjFaIiBzdHlsZT0iZmlsbDpyZ2IoMTg3LDE4NywxODcpOyIvPgogICAgICAgIDwvZz4KICAgICAgICA8Zz4KICAgICAgICAgICAgPHBhdGggZD0iTTUuODU3ODYsMjguNDkzOUM3LjQxNzU4LDI2LjkzNDIgOS45NDYzOCwyNi45MzQyIDExLjUwNjEsMjguNDkzOUMxMy4wNjU4LDMwLjA1MzYgMTMuMDY1OCwzMi41ODI0IDExLjUwNjEsMzQuMTQyMUM5Ljk0NjM4LDM1LjcwMTkgNy40MTc1OCwzNS43MDE5IDUuODU3ODYsMzQuMTQyMUM0LjI5ODE1LDMyLjU4MjQgNC4yOTgxNSwzMC4wNTM2IDUuODU3ODYsMjguNDkzOVoiIHN0eWxlPSJmaWxsOnJnYigxNjQsMTY0LDE2NCk7Ii8+CiAgICAgICAgPC9nPgogICAgICAgIDxnPgogICAgICAgICAgICA8cGF0aCBkPSJNMzYuMDA2MSwxNi4wMDYxQzM4LjIxMTksMTYuMDA2MSA0MCwxNy43OTQyIDQwLDIwQzQwLDIyLjIwNTggMzguMjExOSwyMy45OTM5IDM2LjAwNjEsMjMuOTkzOUMzMy44MDAzLDIzLjk5MzkgMzIuMDEyMiwyMi4yMDU4IDMyLjAxMjIsMjBDMzIuMDEyMiwxNy43OTQyIDMzLjgwMDMsMTYuMDA2MSAzNi4wMDYxLDE2LjAwNjFaIiBzdHlsZT0iZmlsbDpyZ2IoNzQsNzQsNzQpOyIvPgogICAgICAgIDwvZz4KICAgICAgICA8Zz4KICAgICAgICAgICAgPHBhdGggZD0iTTI4LjQ5MzksNS44NTc4NkMzMC4wNTM2LDQuMjk4MTUgMzIuNTgyNCw0LjI5ODE1IDM0LjE0MjEsNS44NTc4NkMzNS43MDE5LDcuNDE3NTggMzUuNzAxOSw5Ljk0NjM4IDM0LjE0MjEsMTEuNTA2MUMzMi41ODI0LDEzLjA2NTggMzAuMDUzNiwxMy4wNjU4IDI4LjQ5MzksMTEuNTA2MUMyNi45MzQyLDkuOTQ2MzggMjYuOTM0Miw3LjQxNzU4IDI4LjQ5MzksNS44NTc4NloiIHN0eWxlPSJmaWxsOnJnYig1MCw1MCw1MCk7Ii8+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K');
        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @php
        $user = Auth::user();
    @endphp
</head>
<body>
    <div id="app">
        <v-app id="inspire" v-cloak>
            @auth
            <v-navigation-drawer
                v-model="drawer"
                app
            >
                <v-list>
                    <a href="/" style="text-decoration: none">
                        <v-list-item link>
                            <v-list-item-icon>
                                <v-icon>mdi-view-dashboard</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>{{ 'Dashboard' }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </a>
                    <!-- <a href="/profile" style="text-decoration: none">
                        <v-list-item link>
                            <v-list-item-icon>
                                <v-icon>mdi-account-outline</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>{{ 'Profile' }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </a> -->
                    <a href="/reset-password" style="text-decoration: none">
                        <v-list-item link>
                            <v-list-item-icon>
                                <v-icon>mdi-key-outline</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>{{ 'Change Password' }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </a>
                    @if($user->roleIs(['Super Admin', 'Admin']))
                    <!-- <a href="{{route('users.index')}}" style="text-decoration: none">
                        <v-list-item link>
                            <v-list-item-icon>
                                <v-icon>mdi-account-box</v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title>{{ 'Users' }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </a> -->
                    <v-expansion-panels accordion focusable flat>
                        <v-expansion-panel>
                            <v-expansion-panel-header>CM1A</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('cm1a.ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm1a.merged-ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Merged Ingredient' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm1a.ingredient-priority.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients Priority' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm1a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>CM2A</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('cm2a.ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm2a.merged-ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Merged Ingredient' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm2a.ingredient-priority.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients Priority' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm2a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>CM1B</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('cm1b.ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm1b.merged-ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Merged Ingredient' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm1b.ingredient-priority.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients Priority' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm1b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>CM2B</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('cm2b.ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm2b.merged-ingredients.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Merged Ingredient' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm2b.ingredient-priority.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Ingredients Priority' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm2b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>CM3</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('cm3.plates.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Plates' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm3.plate-combs.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Plate Combinations' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm3.food-items.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Food Items' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm3.levels.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Levels' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('cm3.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>Dungeon Cleaner</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('dungeon-cleaner.pillur-coordinates.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Pillur Coordinates' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('dungeon-cleaner.tile-spawns.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Tile Spawns' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('dungeon-cleaner.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('dungeon-cleaner.configs.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Configs' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>WC1A</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('woodchop.wc1a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        {{-- <v-expansion-panel>
                            <v-expansion-panel-header>WC2A</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('woodchop.wc2a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel> --}}
                        <v-expansion-panel>
                            <v-expansion-panel-header>WC3A</v-expansion-panel-header>
                            <v-expansion-panel-content>

                                <a href="{{route('woodchop.wc3a.shops.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Shops' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('woodchop.wc3a.levels.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Levels' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('woodchop.wc3a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('woodchop.wc3a.danger-meter.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Danger Meters' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('woodchop.wc3a.configs.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Configs' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>WC1B</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('woodchop.wc1b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        {{-- <v-expansion-panel>
                            <v-expansion-panel-header>WC2B</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('woodchop.wc2b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel> --}}
                        <v-expansion-panel>
                            <v-expansion-panel-header>WC3B</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('woodchop.wc3b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>V1IS</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('v1is.islands.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Maps' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('v1is.island-shapes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Map Shapes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('v1is.island-sizes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Map sizes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('v1is.island-attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>V2IS</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('v2is.islands.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Maps' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('v2is.island-shapes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Map Shapes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('v2is.island-sizes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Map sizes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('v2is.island-attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>

                        <v-expansion-panel>
                            <v-expansion-panel-header>MBV1</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('mbv1.decks.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Decks' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('mbv1.deck-attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                        <v-expansion-panel>
                            <v-expansion-panel-header>MBV2</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('mbv2.decks.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Decks' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                                <a href="{{route('mbv2.deck-attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ 'Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>

                        {{-- Cooking Game --}}
                        <v-expansion-panel>
                            <v-expansion-panel-header>Popup Game</v-expansion-panel-header>
                            <v-expansion-panel-content>
                                <a href="{{route('popupgame.v1a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ '1A Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                            <v-expansion-panel-content>
                                <a href="{{route('popupgame.v2a.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ '2A Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                            <v-expansion-panel-content>
                                <a href="{{route('popupgame.v1b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ '1B Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                            <v-expansion-panel-content>
                                <a href="{{route('popupgame.v2b.attributes.index')}}" style="text-decoration: none">
                                    <v-list-item link>
                                        <v-list-item-icon>
                                            <v-icon>mdi-content-paste</v-icon>
                                        </v-list-item-icon>

                                        <v-list-item-content>
                                            <v-list-item-title>{{ '2B Attributes' }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </a>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                    </v-expansion-panels>

                    @endif

                </v-list>

                <template v-slot:append>
                    <v-list>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <v-list-item
                                link
                            >
                                <v-list-item-icon>
                                    <v-icon>mdi-logout</v-icon>
                                </v-list-item-icon>

                                <v-list-item-content>
                                    <v-list-item-title>{{ 'Log out' }}</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </v-list>
                </template>
            </v-navigation-drawer>
            @endauth

            <v-app-bar app>
                @auth
                <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
                @endauth

                <v-toolbar-title>
                    <a href="/" tag style="cursor: pointer; text-decoration: none; color: grey">{{config('app.name')}}</a>
                </v-toolbar-title>
            </v-app-bar>

            <!-- Sizes your content based upon application components -->
            <v-main>
                @yield('content')
            </v-main>

            <v-footer app>
                @include('layouts.footers.auth')
            </v-footer>
        </v-app>
    </div>

    @stack('script')
    <script>
        $('.copyright').append(new Date().getFullYear());
        // Laravel ajax-token integration
        var _token = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': _token
            }
        });
    </script>
</body>
</html>
