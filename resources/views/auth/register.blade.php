@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="post-content p-5">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label mb-2" for="name">Name</label>
                                    <input class="form-input p-3 @error('name') border-red @enderror" type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}">
                                    @error('name')
                                        <div class="text-danger mt-2 text-sm">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label mb-2" for="username">Username</label>
                                    <input class="form-input p-3 @error('username') border-red @enderror" type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}">
                                    @error('username')
                                    <div class="text-danger mt-2 text-sm">
                                        {{$message}}
                                    </div>
                                @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label mb-2" for="email">Email</label>
                                    <input class="form-input p-3 @error('email') border-red @enderror" type="email" name="email" id="Your Email" placeholder="Your Email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="text-danger mt-2 text-sm">
                                        {{$message}}
                                    </div>
                                @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label mb-2" for="password">Password</label>
                                    <input class="form-input p-3 @error('password') border-red @enderror" type="password" name="password" id="password" placeholder="Choose a password" >
                                    @error('password')
                                    <div class="text-danger mt-2 text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label mb-2" for="password_confirmation">Password Again</label>
                                    <input class="form-input p-3 @error('password_confirmation') border-red @enderror" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="">
                                    @error('password_confirmation')
                                    <div class="text-danger mt-2 text-sm">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <button class="btn btn-primary form-btn p-3" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection