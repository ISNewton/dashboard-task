@extends('layouts/main')
@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>clients table</h6>
                </div>
                <a class="mr-12 rouned-2 bg-red-500 text-black text-right" href="{{ route('clients.create') }}">Add</a>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Image</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Email</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Phone</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td
                                            class="p-2 text-center  align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-m font-semibold leading-tight text-slate-400">
                                                {{ $client->id }}
                                            </span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-m font-semibold leading-tight text-slate-400">
                                                <img width="80" height="80" src="{{ $client->imagePath }}"
                                                    alt="User image">
                                            </span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-m font-semibold leading-tight text-slate-400">
                                                {{ $client->name }}
                                            </span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-m font-semibold leading-tight text-slate-400">
                                                {{ $client->email }}
                                            </span>
                                        </td>

                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-m font-semibold leading-tight text-slate-400">
                                                {{ $client->phone }}
                                            </span>
                                        </td>
                                        <td
                                            class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="{{ route('clients.edit', $client->id) }}"
                                                class="text-m font-semibold leading-tight text-slate-400">
                                                Edit </a>
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button
                                                    class="text-m font-semibold leading-tight text-slate-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
