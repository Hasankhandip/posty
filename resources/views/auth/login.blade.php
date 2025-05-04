@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="post-content p-5">
                            @if (session('status'))
                                <div class="p-4 bg-danger text-white rounded text-center mb-5">
                                    {{session('status')}}
                                </div>
                            @endif
                            <form action="{{route('login')}}" method="post">
                                @csrf
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
                                
                                <div>
                                    <button class="btn btn-primary form-btn p-3" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection