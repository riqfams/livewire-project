<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Product') }}
            </h2>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                

                <h1 class="mt-0 text-2xl font-medium text-gray-900 block h-12 w-auto">
                    Add New Product
                </h1>
                @livewire('products.product-form')
            </div>
        </div>
    </div>
</x-app-layout>
