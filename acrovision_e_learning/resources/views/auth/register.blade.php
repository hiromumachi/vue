@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="employee_num'" class="col-md-4 col-form-label text-md-end">{{ __('employee_num') }}</label>

                            <div class="col-md-6">
                                <input id="employee_num" type="text" class="form-control @error('employee_num') is-invalid @enderror" name="employee_num" value="{{ old('employee_num') }}" required autocomplete="employee_num" autofocus>

                                @error('employee_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6"  style="display: flex;">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <p style="margin:10px 0 0 5px;">@acrovision.jp</p>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="training_type_id" class="col-md-4 col-form-label text-md-end">{{ __('training_type_id') }}</label>
                            <div class="col-md-6">
                                <select name="training_type_id" id="training_type_id" class="form-control @error('training_type_id') is-invalid @enderror">
                                    <option value=1>IT事務</option>
                                    <option value=2>開発1ヶ月</option>
                                    <option value=3>開発2ヶ月</option>
                                    <option value=4>インフラ1ヶ月</option>
                                    <option value=5>インフラ2ヶ月</option> 
                                </select>
                                @error('training_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hire_date" class="col-md-4 col-form-label text-md-end">{{ __('hire_date') }}</label>
                             
                            <div class="col-md-6">
                                <input id="hire_date" type="date" class="form-control @error('hire_date') is-invalid @enderror" name="hire_date" value="{{ old('hire_date') }}" required autocomplete="hire_date" autofocus>
                            
                                @error('hire_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
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
@endsection
