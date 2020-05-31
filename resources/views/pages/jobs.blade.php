@extends('layouts.app')

@section('content')
@include('includes.nav')

<div class="bg-grey-lighter min-h-screen mt-5 flex flex-col">
    <div class="container w-auto mx-auto flex-1 flex flex-col items-center justify-center px-2 md:w-2/3">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black md:w-2/3">
            <h1 class="mb-8 text-3xl text-center">Latest Roles</h1>
                <ul class=" list-reset flex flex-col">
                    <li class=" rounded-t relative -mb-px block border p-4 border-grey m-5">Cras justo odio</li>
                    <li class="relative -mb-px block border p-4 border-grey m-5">Dapibus ac facilisis in</li>
                    <li class="relative -mb-px block border p-4 border-grey m-5">Morbi leo risus</li>
                    <li class="relative -mb-px block border p-4 border-grey m-5">Porta ac consectetur ac</li>
                    <li class="rounded-b relative block border p-4 border-grey m-5">Vestibulum at eros</li>
                </ul>
        </div>
    </div>
</div>
@endsection