<div>
        <form class="max-w-2xl mx-auto">
            <div class="col-span-6 sm:col-span-4 ">
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" wire:model="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" wire:model="price" id="price" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea wire:model="description" id="description" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="file" wire:model="image" id="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class="flex justify-between pt-5">
                <x-secondary-button class="ml-2">
                    <a href="{{ route('products.index') }}">
                        Cancel
                    </a>
                </x-secondary-button>
                @if ($productId)
                <x-button wire:click="update" type="button" class="ml-2">
                    update
                </x-button> 
                @else
                <x-button wire:click="store" type="button" class="ml-2">
                   Add Product
               </x-button> 
                @endif
                
            </div>
        </form>
    </div>

