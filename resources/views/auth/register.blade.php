@extends('layouts.master')

@section('main')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Registreer je hier
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Heb je al een account?
          <a href="{{route('login')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
            Ga naar Login
          </a>
        </p>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="name" class="sr-only">Naam</label>
            <input id="name" name="name" type="text" autocomplete="name" aria-invalid="true" aria-describedby="name-error" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Naam">
            @error('name')
                <span class="mt-2 text-sm text-red-600" id="name-error" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
          </div>
          <div>
            <label for="email" class="sr-only">E-mailadres</label>
            <input id="email" name="email" type="email" autocomplete="email" aria-invalid="true" aria-describedby="email-error" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="E-mailadres">
            @error('email')
                <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
          </div>
        </div>
        <div style="margin-top: 0">
            <label for="password" class="sr-only">Wachtwoord</label>
            <input id="password" name="password" type="password" autocomplete="password" aria-invalid="true" aria-describedby="password-error" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Wachtwoord">
            @error('password')
                <span class="mt-2 text-sm text-red-600" id="password-error" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
          </div>
          <div style="margin-top: 0">
            <label for="password-confirm" class="sr-only">Herhaal wachtwoord</label>
            <input id="password-confirm" type="password" aria-invalid="true" autocomplete="password" aria-describedby="password-confirm-error" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="password_confirmation" placeholder="Herhaal wachtwoord">
            @error('password-confirm')
                <span class="mt-2 text-sm text-red-600" id="password-confirm-error" role="alert">
                    <span>{{ $message }}</span>
                </span>
            @enderror
          </div>
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: solid/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Registreren
          </button>
        </div>
      </form>
    </div>
  </div>
  @endsection
