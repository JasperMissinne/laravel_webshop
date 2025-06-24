<div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg">
    <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Counter: {{ $count }}</h2>
        <div class="space-x-4" x-data>
            <button 
                wire:click="decrement" 
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                x-on:click="$el.classList.add('animate-pulse'); setTimeout(() => $el.classList.remove('animate-pulse'), 200)"
            >
                -
            </button>
            <button 
                wire:click="increment"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                x-on:click="$el.classList.add('animate-pulse'); setTimeout(() => $el.classList.remove('animate-pulse'), 200)"
            >
                +
            </button>
        </div>
    </div>
</div>