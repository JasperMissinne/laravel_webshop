<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">{{ __('Your Shopping Cart') }}</h1>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            @if($items->count() > 0)
                <div class="divide-y divide-gray-200">
                    @foreach($items as $item)
                        <div class="py-4 flex">
                            <div class="ml-4 flex-1">
                                <h3 class="text-lg font-medium">{{ $item->product->name }}</h3>
                                <p class="text-gray-500">€{{ $item->product->price }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">{{ __('Your cart is empty') }}</p>
            @endif
        </div>
    </div>
</div>