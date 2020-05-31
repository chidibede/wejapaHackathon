@extends('layouts.app')

@section('content')
    
@include('includes.nav')
<div class="bg-gray-200 min-h-screen my-2 flex flex-col">
    <div class="container w-auto mx-auto flex-1 flex flex-col items-center justify-center px-2 md:w-2/3">
        <div class="bg-white px-6 py-8 rounded shadow-lg text-black md:w-2/3">
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <input 
                type="text"
                class="block border border-gray-500 w-full bg-gray-100 p-3 rounded mb-4"
                name="fullname"
                placeholder="Your Full Name" />

            <input 
                type="text"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="email"
                placeholder="Your Email" />

            <input 
                type="text"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="phone_number"
                placeholder="Your Phone Number" />

            <input 
                type="text"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="portfolio"
                placeholder="Github/Portfolio/website url" />

            <input 
                type="text"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="stackoverflow"
                placeholder="StackOverflow (optional)" />

            <input 
                type="text"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="resume"
                placeholder="Resume link: Drive, Dropbox, ..." />


            <input 
                type="password"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="password"
                placeholder="Password" />
            <input 
                type="password"
                class="block border border-gray-500 bg-gray-100 w-full p-3 rounded mb-4"
                name="confirm_password"
                placeholder="Confirm Password" />

            <button
                type="submit"
                class="w-full text-center py-3 rounded rounded-lg bg-green-500 text-white hover:bg-green-400 focus:outline-none my-1"
            >Create Account</button>

            <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the 
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and 
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>

        <div class="text-grey-dark mt-6">
            Already have an account? 
            <a class="no-underline border-b border-blue text-green-600" href="/login">
                Sign in
            </a>.
        </div>
    </div>
</div>

@endsection