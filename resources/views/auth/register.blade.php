@extends('partials.layout')
@section('content')
    <div class="card bg-base-200 w-2/5 shadow-xl mx-auto my-auto">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col">
                @csrf
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Name</span>
                    </div>
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="input input-bordered w-full @error('name') input-error @enderror" />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered w-full @error('email') input-error @enderror" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input type="password" name="password" placeholder="Password" class="input input-bordered w-full @error('password')input-error @enderror" />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Password Confirmation</span>
                    </div>
                    <input type="password" name="password_confirmation" placeholder="Password"
                        class="input input-bordered w-full @error('password_confirmation') input-error @enderror" />
                    <div class="label">
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="flex justify-between">
                    <a class="link link-primary" href="{{ route('login') }}">Already registered?</a>
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </form>
        </div>
    </div>
@endsection
