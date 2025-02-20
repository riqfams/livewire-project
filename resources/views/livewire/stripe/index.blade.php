
<div>
    <x-slot name="header" class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stripe') }}
        </h2>

    </x-slot>
    <section class="py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope font-bold text-4xl text-black mb-8 max-lg:text-center">
                Product list
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($products as $product)
                    <a href="javascript:;"
                    class="mx-auto sm:ml-0 group cursor-pointer lg:mx-auto  transition-all duration-500"
                    wire:click="selectProduct({{ $product->id }})">
                    <div class="">
                        <img src="{{ asset('storage/' . $product->image)  }}" alt="perfume bottle image"
                            class="w-full aspect-square rounded-2xl object-cover">
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center justify-between">
                            <h6
                                class="font-semibold text-xl leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                                {{ $product->name }}</h6>
                            <h6 class="font-semibold text-xl leading-8 text-indigo-600">${{ $product->price }}</h6>
                        </div>
                        <p class="mt-2 font-normal text-sm leading-6 text-gray-500">{{ $product->description }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</div>
