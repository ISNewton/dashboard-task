@extends('layouts/main')

@section('content')
    <div class="bg-white p-6">

        <form method="post" action="{{ route('clients.update', $client->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                <input type="name" id="name" name="name" value="{{ old('name', $client->name) }}"
                    class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Example" required>
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $client->email) }}"
                    class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">phone</label>
                <input type="string" id="phone" name="phone"
                value="{{ old('phone' , $client->phone) }}"
                    class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900">image</label>
                <input type="file" id="image" name="image"
                     >
            </div>

            <button type="submit"
                class="text-black bg-blue-500  focus:ring-4
                 focus:outline-none focus:ring-blue-300 font-medium
                  rounded-lg text-sm w-full sm:w-auto
                 px-5 py-2.5 text-center ">Submit</button>
        </form>
    </div>
@endsection
