<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">
                {{ $this->getTranslation('your_shopping_cart') }}
            </h1>
        </div>

        <!-- Cart Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            @if($items->count() > 0)
                <!-- Cart Items -->
                <div class="p-6">
                    <div class="divide-y divide-gray-200">
                        @foreach($items as $item)
                            <div class="py-6 flex items-center">
                                <!-- Product Image Placeholder -->
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                                
                                <!-- Product Details -->
                                <div class="ml-6 flex-1">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        {{ $item->product->getName($currentLanguage) }}
                                    </h3>
                                    <p class="text-gray-600 mt-1">
                                        {{ $item->product->getDescription($currentLanguage) }}
                                    </p>
                                </div>
                                
                                <!-- Price -->
                                <div class="ml-6">
                                    <span class="text-xl font-bold text-green-600">
                                        €{{ number_format($item->product->price, 2) }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- Cart Summary -->
                    <div class="border-t border-gray-200 pt-6 mt-6">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-2xl font-bold text-gray-900">
                                {{ $this->getTranslation('total') }}:
                            </span>
                            <span class="text-3xl font-bold text-green-600">
                                €{{ number_format($total, 2) }}
                            </span>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex space-x-4">
                            <button wire:click="continueShopping" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                                {{ $this->getTranslation('continue_shopping') }}
                            </button>
                            
                            <button wire:click="checkout" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                                {{ $this->getTranslation('checkout') }}
                            </button>
                        </div>
                    </div>
                </div>
            @else
                <!-- Empty Cart State -->
                <div class="text-center py-16">
                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.8 5H19M7 13v6a2 2 0 002 2h6a2 2 0 002-2v-6m-8 2h4"></path>
                    </svg>
                    
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">
                        {{ $this->getTranslation('cart_empty') }}
                    </h3>
                    
                    <p class="text-gray-600 mb-6">
                        {{ $this->getTranslation('cart_empty_message') }}
                    </p>
                    
                    <button wire:click="continueShopping" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                        {{ $this->getTranslation('continue_shopping') }}
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>