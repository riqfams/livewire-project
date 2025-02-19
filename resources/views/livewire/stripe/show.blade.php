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
                <img src="{{ asset('storage/' . $product->image) }}" class="w-1/3 rounded-lg" alt="{{ $product->name }}">
                <div class="flex-1">
                    <h3 class="text-2xl font-semibold">{{ $product->name }}</h3>
                    <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                    <h4 class="text-xl font-bold text-indigo-600 mt-4">${{ $product->price }}</h4>
                    <div class="mt-6">
                        <h4 class="text-lg font-semibold mb-2">Payment Details</h4>
                        <form wire:submit.prevent="processPayment" id="stripe-form">
                            @csrf
                            {{-- <input type="hidden" name="price" value="{{ $product->price }}"> --}}
                            <input type="hidden" name="stripeToken" id="stripe-token" wire:model="token">
        
                            <div id="card-element" class="border p-3 rounded-md"></div>
                            <button class="mt-4 px-6 py-2 bg-indigo-600 text-white rounded-md" type="button" onclick="createToken()">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    var stripe = Stripe('{{ env("STRIPE_KEY") }}');
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    // function createToken() {
    //     stripe.createToken(cardElement).then(function(result) {
    //         if (result.token) {
    //             document.getElementById("stripe-token").value = result.token.id;
    //             document.getElementById("stripe-form").submit();
    //         }
    //     });
    // }

    function createToken() {
        stripe.createToken(cardElement).then(function(result) {
            if (result.token) {
                @this.set('stripeToken', result.token.id);
                @this.call('processPayment');
            } else {
                alert(result.error.message);
            }
        });
    }
</script>

