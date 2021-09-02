@extends('layout.app')

@section('content')

<div class="flex flex-col justify-center">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-neutral to-gray-900 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            <!-- gradient -->
        </div>

        <div class="relative px-4 py-4 bg-neutral shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">
                        Creaza cont de utilizator
                    </h1>
                </div>
            </div>

            <form action="{{ route('register') }}" autocomplete="off" method="post">
                @csrf
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        @if (session()->has('eroare_login'))
                        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('eroare_login') }}
                        </div>
                        @endif
                        
                        <div class="relative">
                            <div class="form-control">
                                <label for="" class="label">
                                    <span class="label-text">
                                        Nume
                                    </span>
                                </label>

                                <input type="text" name="name" id="name" placeholder="exemplu" class="input input-bordered text-white @error('name') text-red-500 @enderror" value="{{ old('username') }}">
                                @error('name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="relative">
                            <div class="form-control">
                                <label for="" class="label">
                                    <span class="label-text">
                                        Email
                                    </span>
                                </label>

                                <input type="text" name="email" id="email" placeholder="exemplu@bdsta.ro" class="input input-bordered text-white @error('email') text-red-500 @enderror" value="{{ old('username') }}">
                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="relative">
                            <div class="form-control">
                                <label for="" class="label">
                                    <span class="label-text">
                                        Parola
                                    </span>
                                </label>

                                <input type="password" name="password" id="password" placeholder="" class="input input-bordered text-white @error('password') text-red-500 @enderror">
                                
                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="relative">
                            <div class="form-control">
                                <label for="" class="label">
                                    <span class="label-text">
                                        Confirma parola
                                    </span>
                                </label>

                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="" class="input input-bordered text-white @error('password') text-red-500 @enderror">
                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="relative">
                            <div class="p-6 card-bordered">
                                <div class="form-control">
                                    <label class="cursor-pointer label">
                                    <span class="label-text">Sunt de acord cu termenii si conditiile</span> 
                                    <div class="px-4">
                                        <input type="checkbox" checked="checked" class="checkbox"> 
                                        <span class="checkbox-mark"></span>
                                    </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="px-24">
                            <button class="btn btn-primary" type="submit">Creaza cont</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection