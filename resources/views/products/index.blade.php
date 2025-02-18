<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Product') }}
            </h2>
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                <a href="{{ route('products.create') }}" >
                    Add New Product
                </a>
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <x-application-logo class="block h-12 w-auto" />

                <h1 class="mt-8 text-2xl font-medium text-gray-900">
                    Product page!
                </h1>
                @livewire('products.product')

            </div>
        </div>
    </div>
</x-app-layout>
