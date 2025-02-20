<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Detail') }}
        </h2>
    </x-slot>

    @session("success")
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50  role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success!</span> {{ $value }}
        </div>
        </div>   
    @endsession
    <section class="py-10">
        <div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
            <div class="flex gap-6">
                <img src="{{ asset('storage/' . $image) }}" class="w-1/3 rounded-lg" alt="{{ $name }}">
                <div class="flex-1">
                    <h3 class="text-2xl font-semibold">{{ $name }}</h3>
                    <p class="text-gray-600 mt-2">{{ $description }}</p>
                    <h4 class="text-xl font-bold text-indigo-600 mt-4">${{ $price }}</h4>
                    <div class="mt-6">
                        <div class="relative flex items-center max-w-[8rem]">
                            <button wire:click="decreaseQuantity" type="button" id="decrement-button"  class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                </svg>
                            </button>
                            <p min="1" max="100" type="number" id="quantity-input" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5  placeholder="Quantity" required >{{ $quantity }} </p>
                            <button wire:click="increaseQuantity" type="button" id="increment-button" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                <svg class="w-3 h-3 text-gray-900 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </button>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">Payment Details</h4>
                        <button wire:click="checkoutProduct" class="mt-4 px-6 py-2 bg-indigo-600 text-white rounded-md" type="button">
                            Pay Now</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

