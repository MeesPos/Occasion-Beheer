@extends('layouts.master', ['title' => 'Home'])

@section('main')
    @include('partials.page-head', ['title' => 'Home'])
    <div class="px-4 mt-6 sm:px-6 lg:px-8">
        <ul class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-3 mt-3">
            <li class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                    <i class="fas fa-archive"></i>
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            Aantal Auto's
                        </a>
                        <p class="text-gray-500">{{ $count }} auto's</p>
                    </div>
                </div>
            </li>

            <li class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                    <i class="fas fa-euro-sign"></i>
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            Totale prijs
                        </a>
                        <p class="text-gray-500">&euro; {{ $total }},-</p>
                    </div>
                </div>
            </li>

            <li class="relative col-span-1 flex shadow-sm rounded-md">
                <div
                    class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                    <i class="fas fa-archive"></i>
                </div>
                <div
                    class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                        <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                            Totale winst
                        </a>
                        <p class="text-gray-500">&euro; {{ $marge }},- winst (Exclusief BTW)</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- Projects list (only on smallest breakpoint) -->
    <div class="mt-10 sm:hidden">
        <div class="px-4 sm:px-6">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Projects</h2>
        </div>
        <ul class="mt-3 border-t border-gray-200 divide-y divide-gray-100">
            @foreach($cars as $row)
            <li>
                <span class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                    <span class="flex items-center truncate space-x-3">
                        <span class="font-medium truncate text-sm leading-6">
                            {{$row['merk']}}
                            <span class="truncate font-normal text-gray-500">{{$row['type']}}</span>
                        </span>
                    </span>
                    <span id="item-dropdown-toggle-mob">
                        <span class="relative flex justify-end items-center">
                            <div class="table-cell px-6 py-3 whitespace-nowrap text-sm text-green-500 text-center">
                                <a href="{{route('change-car', ['id' => $row['id']])}}"><i class="fas fa-pencil-alt"></i></a>
                            </div>
                            <div class="table-cell px-6 py-3 whitespace-nowrap text-sm text-red-500 text-center">
                                <a href="{{route('delete-car', ['id' => $row['id']])}}"><i class="fas fa-trash"></i></a>
                            </div>
                        </span>
                    </span>
                </span>
            </li>
            @endforeach

            <!-- More items... -->
        </ul>
    </div>

    <!-- Projects table (small breakpoint and up) -->
    <div class="hidden mt-8 sm:block">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr class="border-t border-gray-200">
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="lg:pl-2">Auto</span>
                        </th>
                        <th
                            class="hidden lg:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="lg:pl-2">Inkoop prijs</span>
                        </th>
                        <th
                            class="hidden lg:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="lg:pl-2">Verkoop prijs</span>
                        </th>
                        <th
                            class="hidden xl:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Bewerkt op
                        </th>
                        <th
                            class="hidden xl:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gemaakt op
                        </th>
                        <th
                            class="table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Bewerken
                        </th>
                        <th
                            class="table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Verwijderen
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($cars as $row)
                        <tr>
                            <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="flex items-center space-x-3 lg:pl-2">
                                    </div>
                                    <a href="#" class="truncate hover:text-gray-600">
                                        <span>
                                            {{ $row['merk'] }}
                                            <span class="text-gray-500 font-normal">{{ $row['type'] }}</span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                            <td class="hidden lg:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                &euro; {{ $row['inkoop'] }},-
                            </td>
                            <td class="hidden lg:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                &euro; {{ $row['verkoop'] }},-
                            </td>
                            <td class="hidden xl:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                {{ $row['updated_at'] }}
                            </td>
                            <td class="hidden xl:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                {{ $row['created_at'] }}
                            </td>
                            <td class="table-cell px-6 py-3 whitespace-nowrap text-sm text-green-500 text-center">
                                <a href="{{route('change-car', ['id' => $row['id']])}}"><i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td class="table-cell px-6 py-3 whitespace-nowrap text-sm text-red-500 text-center">
                                <a href="{{route('delete-car', ['id' => $row['id']])}}"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </main>
    </div>
    </div>
@endsection
