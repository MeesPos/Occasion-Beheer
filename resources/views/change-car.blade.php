@extends('layouts.master', ['title' => 'Auto Wijzigen'])

@section('main')
@include('partials.page-head', ['title' => 'Auto Wijzigen'])
    @foreach ($car as $row)
        <form action="{{ route('insert-change', ['id' => $row['id']]) }}" class="space-y-8 divide-y divide-gray-200 w-10/12 mx-auto my-4"
            method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Auto details
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Vul hier alle details van de auto in.
                        </p>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <fieldset class="mt-6 sm:col-span-3">
                            <div>
                                <legend class="block text-sm font-medium text-gray-700">
                                    Soort auto
                                </legend>
                            </div>
                            <div class="grid grid-cols-2">
                                @foreach ($categorie as $cat)
                                    <div class="flex items-center mt-2">
                                        <input id="soort" name="soort" type="radio" value="Busje" @if ($cat['Busje'] = 'Busje') checked @endif
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="soort" class="ml-3 block text-sm font-medium text-gray-700">
                                            Busje
                                        </label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input id="soort" name="soort" type="radio" value="SUV" @if ($cat['soort'] = 'SUV') checked @endif
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="soort" class="ml-3 block text-sm font-medium text-gray-700">
                                            SUV
                                        </label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input id="soort" name="soort" type="radio" value="Persoonsauto" @if ($cat['soort'] = 'Persoonsauto') checked @endif
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="soort" class="ml-3 block text-sm font-medium text-gray-700">
                                            Persoonsauto
                                        </label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input id="soort" name="soort" type="radio" value="Cabrio" @if ($cat['soort'] = 'Cabrio') checked @endif
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="soort" class="ml-3 block text-sm font-medium text-gray-700">
                                            Cabrio
                                        </label>
                                    </div>
                                @endforeach
                                @error('soort')
                                    <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                        </fieldset>

                        <div class="sm:col-span-3 my-auto">
                            <label for="merk" class="block text-sm font-medium text-gray-700">
                                Merk
                            </label>
                            <div class="mt-1">
                                <input type="text" name="merk" id="merk" autocomplete="merk" value="{{ $row['merk'] }}"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('merk')
                                <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="type" class="block text-sm font-medium text-gray-700">
                                Type
                            </label>
                            <div class="mt-1">
                                <input type="text" name="type" id="type" autocomplete="type" value="{{ $row['type'] }}"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('type')
                                <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="bouwdatum" class="block text-sm font-medium text-gray-700">
                                Bouwdatum
                            </label>
                            <div class="mt-1">
                                <input type="date" name="bouwdatum" id="bouwdatum" autocomplete="bouwdatum"
                                    value="{{ $row['bouwdatum'] }}"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('bouwdatum')
                                <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 @if($row['image'] != '') text-center @endif">
                            <label for="cover_photo" class="block text-sm font-medium text-gray-700 text-left">
                                Foto van de auto
                            </label>
                            <label for="file-upload"
                                class="relative cursor-pointer bg-white rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500 mx-auto">
                                @if ($row['image'] != '')
                                    <img src="{{ asset('storage/' . $row['image']) }}" class="w-72 h-auto mx-auto">
                                    <a href="{{route('delete-image', ['id' => $row['id']])}}" class="ml-3 mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Verwijderen
                                    </a>
                                @else
                                    <div
                                        class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                                viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <span class="text-indigo-600 hover:text-indigo-500" id="upload-text">Klik
                                                    hier om
                                                    een foto te uploaden</span>
                                                <input id="file-upload" name="image" type="file" class="sr-only"
                                                    accept="image/png, image/jpg, image/jpeg, image/gif">
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF tot 10MB
                        </p>
                        @error('image')
                            <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>
                </div>
    @endif

    </div>
    </div>
    </div>

    <div class="pt-8">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Gegevens van de auto
            </h3>
            <p class="mt-1 text-sm text-gray-500">
                Vul hier alle gegevens van deze auto in.
            </p>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="inkoop" class="block text-sm font-medium text-gray-700">
                    Inkoop prijs
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                        &euro;
                    </span>
                    <input type="number" name="inkoop" id="inkoop" autocomplete="inkoop" value="{{ $row['inkoop'] }}"
                        class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
                @error('inkoop')
                    <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>

            <div class="sm:col-span-3">
                <label for="verkoop" class="block text-sm font-medium text-gray-700">
                    Verkoop prijs
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                        &euro;
                    </span>
                    <input type="number" name="verkoop" id="verkoop" autocomplete="verkoop" value="{{ $row['verkoop'] }}"
                        class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
                @error('verkoop')
                    <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>

            <div class="sm:col-span-6">
                <label for="kenteken" class="block text-sm font-medium text-gray-700">
                    Kenteken
                </label>
                <div class="mt-1">
                    <input type="text" name="kenteken" id="kenteken" autocomplete="kenteken" value="{{ $row['kenteken'] }}"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('kenteken')
                    <span class="mt-2 text-sm text-red-600" id="email-error" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    </div>

    <div class="pt-5">
        <div class="flex justify-end">
            <button type="submit"
                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Opslaan
            </button>
        </div>
    </div>
    </form>
    @endforeach
@endsection

@section('scripts')
    <script>
        let input = document.getElementById("file-upload");
        input.addEventListener('change', function() {
            if (input.value != "") {
                document.getElementById('upload-text').innerHTML = "Afbeelding is geselecteerd!";
            }
        })

    </script>
@endsection
