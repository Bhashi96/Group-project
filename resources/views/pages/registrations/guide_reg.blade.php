@extends('layouts.reglayout')


@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register as Guide') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                                 <label for="inputGender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                        <div class="col-md-6">
                                                <select id="inputGender" class="form-control">
                                                 <option selected>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                                 </select>
                                         </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="licence" class="col-md-4 col-form-label text-md-right">{{ __('Licence ID') }}</label>

                            <div class="col-md-6">
                                <input id="licence" type="text" class="form-control @error('licence') is-invalid @enderror" name="licence" value="{{ old('licence') }}" required autocomplete="licence" autofocus>

                                @error('licence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tourism Area') }}</label>

                            <div class="col-md-6">
                            <select id="inputProvince" class="form-control">
                                        <option selected>Southern Province</option>
                                        <option>Western Province</option>
                                        <option>North Province</option>
                                        <option>Eastern Province</option>
                                        <option>North Eastern Province Province</option>
                                        <option>Middle Province</option>
                                        <option>Western Province</option>
                                        <option>Western Province</option>
                                        <option>Western Province</option>
                                    </select>
                            </div>
                        </div>



                        
                        <div class="form-group row">
                            <label for="charge" class="col-md-4 col-form-label text-md-right">{{ __('Charge per day') }}</label>

                            <div class="col-md-6">
                                <input id="charge" type="text" placeholder="00.00$" class="form-control @error('charge') is-invalid @enderror" name="charge" value="{{ old('charge') }}" required autocomplete="name" autofocus>

                                @error('charge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="charge" class="col-md-4 col-form-label text-md-right">{{ __('Languages') }}</label>

                            <div class="col-md-6">
                            <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="englishlan">
                            <label class="custom-control-label" for="englishlan">English</label>
                            </div>
      
                    
                            <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="defaultInline2">
                            <label class="custom-control-label" for="defaultInline2">German</label>
                            </div>
      
                             <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="defaultInline3">
                            <label class="custom-control-label" for="defaultInline3">French</label>
                            </div>
                            
                            
                             <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="defaultInline4">
                                <label class="custom-control-label" for="defaultInline4">Jappenise</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="defaultInline5">
                                <label class="custom-control-label" for="defaultInline5">Korean</label>
                            </div>
                             <div class="custom-control custom-checkbox custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" id="defaultInline6">
                                 <label class="custom-control-label" for="defaultInline6">Tamil</label>
                             </div>

                            
                            <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="defaultInline7">
                                    <label class="custom-control-label" for="defaultInline7">Chinesse</label>
                             </div>
                             <div class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox" class="custom-control-input" id="defaultInline8">
                                     <label class="custom-control-label" for="defaultInline8">Latin</label>
                             </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exp" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                            <div class="col-md-6">
                                
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"class="form-control @error('cexp') is-invalid @enderror" name="exp" value="{{ old('exp') }}" required autocomplete="exp" autofocus></textarea>
                                @error('exp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                           <div class="col-md-6">
                               <input id="user_type" type="hidden"  name="user_type" value="{{ __('gud')}}" required autocomplete="user_type">

                           </div>
                       </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@endsection