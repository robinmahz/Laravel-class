@extends('layout.app')
@section('content')
    <div class="relative overflow-x-auto mx-[8rem]">
        <a href="/account/create">
            <div class="p-6 py-2 rounded-3xl bg-black w-fit text-white my-8">
                Add Account
            </div>
        </a>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 capitalize">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 capitalize">
                        amount
                    </th>
                    <th scope="col" class="px-6 py-3 upppercase">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->name }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->category_id }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->amount }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->description }}
                        </th>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="/account/{{ $item->id }}/edit">edit</a>
                            |
                            <form action="/account/{{ $item->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
