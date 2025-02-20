
<div>
    <x-slot name="header" class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stripe') }}
        </h2>

    </x-slot>
    <section class="py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope font-bold text-4xl text-black mb-8 max-lg:text-center">
                Transaction list
            </h2>
            <div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Transaction ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Quantity
                            </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($transactions as $transaction)    
                        <tr >
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                {{ $transaction->id }}
                            </td>
                            <td class="px-6 py-4 overflow-hidden whitespace-nowrap text-sm font-medium text-gray-500">
                                {{ $transaction->created_at }}
                            </td>               
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                {{ $transaction->product->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" >
                                {{ $transaction->quantity }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">
                                ${{ $transaction->total_price }}
                            </td>
                        
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button  class="mr-2 text-blue-600"><a href="{{ route('transactions.detail', $transaction->id) }}">See Details</a></button>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
        </div>
    </section>
</div>
