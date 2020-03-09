@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Nuevo Ticket</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tickets.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                                <div class="col-md-6">
                                    <select id="user" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required>
                                        @foreach($users as $user)                                      
                                            <option value={{ $user->id }}>{{ $user->name}} | {{$user->email}}</option>
                                        @endforeach
                                    </select>

                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Crear ticket') }}
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
