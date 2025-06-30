<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                {{ $this->getTranslation('registration_title') }}
            </h1>
            <p class="text-lg text-gray-600">
                {{ $this->getTranslation('registration_subtitle') }}
            </p>
        </div>

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('message') }}
            </div>
        @endif

        <!-- Registration Form -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <form wire:submit.prevent="register" class="space-y-6">
                    
                    <!-- First Name -->
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $this->getTranslation('first_name') }} <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="firstName"
                            wire:model.live="firstName"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('firstName') border-red-500 @enderror"
                            placeholder="{{ $this->getTranslation('first_name_placeholder') }}"
                        >
                        @error('firstName') 
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $this->getTranslation('last_name') }} <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name"
                            wire:model.live="name"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('name') border-red-500 @enderror"
                            placeholder="{{ $this->getTranslation('last_name_placeholder') }}"
                        >
                        @error('name') 
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $this->getTranslation('email_address') }} <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            wire:model.live="email"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('email') border-red-500 @enderror"
                            placeholder="{{ $this->getTranslation('email_placeholder') }}"
                        >
                        @error('email') 
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $this->getTranslation('address') }} <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="address"
                            wire:model.live="address"
                            rows="3"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('address') border-red-500 @enderror"
                            placeholder="{{ $this->getTranslation('address_placeholder') }}"
                        ></textarea>
                        @error('address') 
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button 
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                            wire:loading.attr="disabled"
                        >
                            <span wire:loading.remove>
                                {{ $this->getTranslation('complete_registration') }}
                            </span>
                            <span wire:loading>
                                {{ $this->getTranslation('processing') }}...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>