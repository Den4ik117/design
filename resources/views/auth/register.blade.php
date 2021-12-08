@extends('layouts.app')

@section('header')
  <div class="flex items-center justify-between py-2">
    <div class="font-bold">
      <span>Регистрация</span>
      {{-- <a class="text-indigo-400 font-bold hover:underline" href="#">[назад]</a> --}}
    </div>
    <a class="create-btn bg-green-500 text-white font-semibold py-1 px-2 hover:bg-green-600 rounded text-sm" href="{{ route('login') }}">
      <span class="block sm:hidden">&nbsp;☇&nbsp;</span>
      <span class="hidden sm:block">Авторизоваться</span>
    </a>
  </div>
@endsection

@section('content') 
  <div class="mt-6">
    <div class="md:grid md:grid-cols-4 md:gap-6">
      {{-- <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
          <p class="mt-1 text-sm text-gray-600">
            Use a permanent address where you can receive mail.
          </p>
        </div>
      </div> --}}
      <div class="mt-5 md:mt-0 md:col-span-4">
        <form action="#" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700">Имя:</label>
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-700">Фамилия:</label>
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Почта:</label>
                  <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Пароль:</label>
                  <input type="password" name="password" id="street-address" autocomplete="new-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                
                <div class="col-span-6 sm:col-span-3">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Повторите пароль:</label>
                  <input type="password" name="password_confirmation" id="street-address" autocomplete="new-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Зарегистрироваться
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection