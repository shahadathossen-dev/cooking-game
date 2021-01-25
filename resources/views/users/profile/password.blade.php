@extends('layouts.frontend', ['activePage' => 'password', 'titlePage' => __('User password')])

@section('content')
<v-container class="content">
    <div class="row">
        <div class="col-md-12">
        <form method="PUT" action="{{ route('password.change') }}" @submit.prevent="updatePassword()" class="form-horizontal">
            @csrf

            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Change password') }}</h4>
                </div>
                <div class="card-body ">
                    @if (session('status_password'))
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status_password') }}</span>
                        </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" v-model="old_password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                            @if ($errors->has('old_password'))
                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" v-model="password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                            @if ($errors->has('password'))
                                <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                            <input class="form-control" name="password_confirmation" id="input-password-confirmation" v-model="password_confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
                </div>
            </div>
        </form>
        </div>
    </div>
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
            old_password: '',
            password: '',
            password_confirmation: '',
        };
    },
    methods:{
        updateProfile() {
            axios.put("{{ route('profile.update') }}", {
                name: this.name,
                email: this.email
            })
            .then(({data}) => {
                this.$nextTick(function () {
                    this.$toastr.success(data.message, data.status);
                });
            })
            .catch(e=> function(){
                console.log(e)
                alert(e);
            });
        },
        updatePassword() {
            axios.put("{{ route('password.change') }}", {
                old_password: this.old_password,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
            .then(({data}) => {
                this.$nextTick(function () {
                    this.$toastr.success(data.message, data.status);
                });
            })
            .catch(e=> function(){
                console.log(e)
                alert(e);
            });
        }
    }
});
</script>
@endpush
