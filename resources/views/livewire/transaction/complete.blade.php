<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction Detail') }}
        </h2>
    </x-slot>

    {{-- @session("success")
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50  role="alert">
        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Success!</span> {{ $value }}
        </div>
        </div>   
    @endsession --}}

    <section class="py-8 antialiased md:py-16">
    <div class="bg-white py-8 m-0 mx-auto max-w-2xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl mb-2">Thanks for your order!</h2>
        <p class="text-gray-500  mb-6 md:mb-8">Your order <a href="#" class="font-medium text-gray-900  hover:underline">#{{ $transaction->id }}</a> will be processed within 24 hours during working days. We will notify you by email once your order has been shipped.</p>
        <div class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 mb-6 md:mb-8">
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 ">Date</dt>
                <dd class="font-medium text-gray-900 sm:text-end">{{ $transaction->created_at }}</dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 ">Email</dt>
                <dd class="font-medium text-gray-900 sm:text-end">{{ $transaction->user->email }}</dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 ">Product</dt>
                <dd class="font-medium text-gray-900 sm:text-end">{{ $transaction->product->name }}</dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 ">Quantity</dt>
                <dd class="font-medium text-gray-900 sm:text-end">{{ $transaction->quantity }}</dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 ">Total</dt>
                <dd class="font-medium text-gray-900  sm:text-end">${{ $transaction->total_price }}</dd>
            </dl>
        </div>
        <div class="flex justify-center space-x-4">
            <a href="{{ route("transactions.index") }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Return to transaction</a>
        </div>
    </div>
    </section>
</div>