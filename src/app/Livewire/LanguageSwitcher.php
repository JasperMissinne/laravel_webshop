<?php

namespace App\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $currentLanguage = 'en';

    public function mount()
    {
        $this->currentLanguage = session('language', 'en');
    }

    public function switchLanguage($language)
    {
        $this->currentLanguage = $language;
        session(['language' => $language]);
        $this->dispatch('languageChanged', language: $language);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}