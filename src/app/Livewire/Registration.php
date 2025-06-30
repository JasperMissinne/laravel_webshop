<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Translation;

class Registration extends Component
{
    public $currentLanguage = 'en';
    public $name = '';
    public $firstName = '';
    public $address = '';
    public $email = '';

    protected $listeners = ['languageChanged' => 'handleLanguageChange'];

    public function mount()
    {
        $this->currentLanguage = session('language', 'en');
    }

    public function handleLanguageChange($language)
    {
        $this->currentLanguage = $language;
        session(['language' => $language]);
    }

    public function getTranslation($key)
    {
        return Translation::get($key, $this->currentLanguage);
    }

    public function register()
    {
        // For now, just show a success message
        session()->flash('message', $this->getTranslation('registration_successful'));
        
        // Reset form
        $this->name = '';
        $this->firstName = '';
        $this->address = '';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.registration');
    }
}