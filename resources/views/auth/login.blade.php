@extends('layouts.master')

@section('main')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Login op je account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Of
          <a href="{{route('register')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
            registreer je hier
          </a>
        </p>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="email" class="sr-only">E-mailaddress</label>
            <input id="email" name="email" type="email" autocomplete="email" aria-invalid="true" aria-describedby="email-error" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="E-mailaddres">
            @error('email')
                <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
          </div>
          <div>
            <label for="password" class="sr-only">Wachtwoord</label>
            <input id="password" name="password" type="password" autocomplete="current-password" aria-invalid="true" aria-describedby="password-error" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Wachtwoord">
            @error('password')
                <span class="mt-2 text-sm text-red-600" id="password-error" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              Onthoud mij
            </label>
          </div>
        </div>
  
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: solid/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
  @endsection