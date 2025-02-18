<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Price
                </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Image
                </th>
                    {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" >
                    Created at
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Updated at
                </th> --}}
                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($products as $product)    
            <tr >
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                    {{ $product->id }}
                </td>
                
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                    {{ $product->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" >
                    {{ $product->price }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                    {{ $product->description }}
                </td>
                <td class="px-6 py-4 overflow-hidden whitespace-nowrap text-sm font-medium text-gray-500">
                    {{ $product->image }}
                </td>
                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                    {{ $product->created_at }}
                </td> --}}
                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                    {{ $product->updated_at }}
                </td> --}}
                
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button  class="mr-2 text-blue-600"><a href="{{ route('products.edit', $product->id) }}">Edit</a></button>
                    <button  class="text-red-600" wire:click="confirmDeletion({{ $product->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    <x-confirmation-modal :id="'delete-modal-modal'" :maxWidth="'sm'" wire:model="confirmModal">
        <x-slot name="title">
            Delete Product
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this product? all of its data will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="cancelDeletion" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deleteProduct" wire:loading.attr="disabled">
                Delete Product
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

</div>
