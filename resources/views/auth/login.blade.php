@extends('layouts.app')

@section('content')
    
@include('includes.nav')
<div class="bg-gray-200 min-h-screen flex flex-col">
    <div class="container w-auto mx-auto flex-1 flex flex-col items-center justify-center px-2 md:w-2/3">
        <div class="bg-white px-6 py-6 rounded shadow-lg text-black md:w-2/3">
            <h1 class="mb-8 text-3xl text-center">Sign in</h1>
            <input 
                type="text"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="email"
                placeholder="Your Email" />


            <input 
                type="password"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="password"
                placeholder="Your Password" />
    

            <button
                type="submit"
                class="w-full text-center py-3 rounded rounded-lg bg-green-500 text-white hover:bg-green-400 focus:outline-none my-1"
            >Sign in</button>
        </div>

        <div class="text-grey-dark mt-6">
            Don't have an account? 
            <a class="no-underline border-b border-blue text-green-600" href="/register">
                Sign up
            </a>.
        </div>
    </div>
</div>

@endsection