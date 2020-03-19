@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="justify-content-center">
        <b-col md="8">
            <b-card  title="{{ __('Register') }} " class="font-weight-bold">

                <b-card-body>
                    @if($errors->any())
                      <b-alert variant="danger" show>
                          <ul class="mb-0">
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </b-alert>
                     @endif
                    <b-form method="POST" action="{{ route('register') }}">
                        @csrf

                        <b-form-group>
                            <b-row>
                                <b-col md="4" class="text-md-right font-weight-bold">
                                    <label for="name">{{ __('Name') }}</label>
                                </b-col>
                                <b-col md="6">
                                    <b-form-input type="text"
                                    id="name" name="name" 
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    </b-form-input>
                                </b-col>
                                <b-col md="2"></b-col>
                            </b-row>

                        </b-form-group>

                        <b-form-group>
                            <b-row>
                                <b-col md="4" class="text-md-right font-weight-bold">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                </b-col>
                                <b-col md="6">
                                    <b-form-input type="email"
                                    id="email" name="email" 
                                    value="{{ old('email') }}" required autocomplete="email">

                                    </b-form-input>
                                </b-col>
                                <b-col md="2"></b-col>
                            </b-row>

                        </b-form-group>

                        <b-form-group>
                            <b-row>
                                <b-col md="4" class="text-md-right font-weight-bold">
                                    <label for="password">{{ __('Password') }}</label>
                                </b-col>
                                <b-col md="6">
                                    <b-form-input type="password"
                                    id="password" name="password" 
                                    value="{{ old('password') }}" autocomplete="new-password" required >

                                    </b-form-input>
                                </b-col>
                                <b-col md="2"></b-col>
                            </b-row>

                        </b-form-group>

                        <b-form-group>
                            <b-row>
                                <b-col md="4" class="text-md-right font-weight-bold">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                </b-col>
                                <b-col md="6">
                                    <b-form-input type="password"
                                    id="password-confirm" name="password-confirm" 
                                    required autocomplete="new-password">

                                    </b-form-input>
                                </b-col>
                                <b-col md="2"></b-col>
                            </b-row>

                        </b-form-group>

                       <b-row>
                           <b-col md="4"></b-col>
                           <b-col md="6">
                            <b-button type="submit" variant="primary">{{ __('Register') }}</b-button>
                           </b-col>
                       </b-row>
                        
                    </b-form>
                </b-card-body>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
