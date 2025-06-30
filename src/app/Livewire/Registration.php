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

    // Validation rules
    protected function rules()
    {
        return [
            'firstName' => 'required|string|min:2|max:50',
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email|max:100',
            'address' => 'required|string|min:10|max:255',
        ];
    }

    // Validation messages
    protected function messages()
    {
        return [
            'firstName.required' => $this->getTranslation('first_name_required'),
            'firstName.min' => $this->getTranslation('first_name_min'),
            'firstName.max' => $this->getTranslation('first_name_max'),
            'name.required' => $this->getTranslation('last_name_required'),
            'name.min' => $this->getTranslation('last_name_min'),
            'name.max' => $this->getTranslation('last_name_max'),
            'email.required' => $this->getTranslation('email_required'),
            'email.email' => $this->getTranslation('email_invalid'),
            'email.max' => $this->getTranslation('email_max'),
            'address.required' => $this->getTranslation('address_required'),
            'address.min' => $this->getTranslation('address_min'),
            'address.max' => $this->getTranslation('address_max'),
        ];
    }

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
        $this->validate();

        session()->flash('message', $this->getTranslation('registration_successful'));
        
        $this->reset(['name', 'firstName', 'address', 'email']);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}