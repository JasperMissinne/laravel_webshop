<div class="flex justify-end mb-6">
    <div class="bg-white rounded-lg shadow p-2 flex space-x-2">
        <button 
            wire:click="switchLanguage('en')" 
            class="px-4 py-2 rounded {{ $currentLanguage === 'en' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100' }}"
        >
            English
        </button>
        <button 
            wire:click="switchLanguage('nl')" 
            class="px-4 py-2 rounded {{ $currentLanguage === 'nl' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100' }}"
        >
            Nederlands
        </button>
    </div>
</div>