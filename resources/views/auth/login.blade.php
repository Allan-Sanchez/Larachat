@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="justify-content-center">
        <b-col cols="8">
            <b-card title="{{ __('Login') }}" >
               
                <b-card-body>
                    <b-row>
                        <b-col sm="12" md="2"></b-col>
                        <b-col sm="12" md="8">
                            <b-form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <b-form-group class="font-weight-bold"  label="{{ __('E-Mail Address') }}" 
                                larabel-for="email">
        
                                    <b-form-input type="email" 
                                    id="email"  name="email"
                                    value="{{ old('email') }}" required autofocus 
                                    placeholder="test@test.com"></b-form-input>
        
                                </b-form-group>
                                    {{-- <div class="col-md-6"> --}}
                                        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
        
                                        {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                <b-form-group class="font-weight-bold"  label="{{ __('Password') }}" 
                                    larabel-for="password">
        
                                    <b-form-input type="password" 
                                    id="password"  name="password" placeholder="your password"
                                    value="{{ old('password') }}" required ></b-form-input>
                                    
                                </b-form-group>
        

                                <b-form-group>
                                    <b-form-checkbox
                                        name="remember" id="remember" 
                                        {{ old('remember') ? 'checked=true' : '' }}
                                        >
                                        {{ __('Remember Me') }}
                                    </b-form-checkbox>
                                </b-form-group>

                                <b-row>
                                    <b-col class="d-flex justify-content-end align-items-center">
                                        <b-button type="submit" variant="primary">{{ __('Login') }}</b-button>
                                        <b-link class="ml-2" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </b-link>
                                    </b-col>
                                </b-row>
        
        
                                        {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif --}}
                            </b-form>
                        </b-col>
                        <b-col sm="12" md="2"></b-col>
                    </b-row>
                    
                </b-card-body>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
