<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class UITranslationSeeder extends Seeder
{
    public function run()
    {
        $uiTranslations = [
            'our_products' => [
                'en' => 'Our Products',
                'nl' => 'Onze Producten'
            ],
            'discover_collection' => [
                'en' => 'Discover our amazing collection',
                'nl' => 'Ontdek onze geweldige collectie'
            ],
            'add_to_cart' => [
                'en' => 'Add to Cart',
                'nl' => 'In winkelwagen'
            ],
            'no_products' => [
                'en' => 'No products found',
                'nl' => 'Geen producten gevonden'
            ],
            'add_products_message' => [
                'en' => 'Get started by adding some products to your database.',
                'nl' => 'Begin door enkele producten aan uw database toe te voegen.'
            ],
            'added_to_cart' => [
                'en' => 'Added to cart successfully!',
                'nl' => 'Succesvol toegevoegd aan winkelwagen!'
            ],
            // Cart page translations
            'your_shopping_cart' => [
                'en' => 'Your Shopping Cart',
                'nl' => 'Uw Winkelwagen'
            ],
            'cart_empty' => [
                'en' => 'Your cart is empty',
                'nl' => 'Uw winkelwagen is leeg'
            ],
            'cart_empty_message' => [
                'en' => 'Add some products to get started with your shopping.',
                'nl' => 'Voeg enkele producten toe om te beginnen met winkelen.'
            ],
            'continue_shopping' => [
                'en' => 'Continue Shopping',
                'nl' => 'Verder Winkelen'
            ],
            'total' => [
                'en' => 'Total',
                'nl' => 'Totaal'
            ],
            'checkout' => [
                'en' => 'Checkout',
                'nl' => 'Afrekenen'
            ],
            // Registration page translations
            'registration_title' => [
                'en' => 'Complete Your Registration',
                'nl' => 'Voltooi Uw Registratie'
            ],
            'registration_subtitle' => [
                'en' => 'Please fill in your details to complete your order',
                'nl' => 'Vul uw gegevens in om uw bestelling te voltooien'
            ],
            'first_name' => [
                'en' => 'First Name',
                'nl' => 'Voornaam'
            ],
            'last_name' => [
                'en' => 'Last Name',
                'nl' => 'Achternaam'
            ],
            'email_address' => [
                'en' => 'Email Address',
                'nl' => 'E-mailadres'
            ],
            'address' => [
                'en' => 'Address',
                'nl' => 'Adres'
            ],
            'first_name_placeholder' => [
                'en' => 'Enter your first name',
                'nl' => 'Voer uw voornaam in'
            ],
            'last_name_placeholder' => [
                'en' => 'Enter your last name',
                'nl' => 'Voer uw achternaam in'
            ],
            'email_placeholder' => [
                'en' => 'Enter your email address',
                'nl' => 'Voer uw e-mailadres in'
            ],
            'address_placeholder' => [
                'en' => 'Enter your full address',
                'nl' => 'Voer uw volledige adres in'
            ],
            'complete_registration' => [
                'en' => 'Complete Registration',
                'nl' => 'Registratie Voltooien'
            ],
            'registration_successful' => [
                'en' => 'Registration completed successfully!',
                'nl' => 'Registratie succesvol voltooid!'
            ],
            // Validation messages
            'first_name_required' => [
                'en' => 'First name is required',
                'nl' => 'Voornaam is verplicht'
            ],
            'first_name_min' => [
                'en' => 'First name must be at least 2 characters',
                'nl' => 'Voornaam moet minimaal 2 karakters bevatten'
            ],
            'first_name_max' => [
                'en' => 'First name cannot exceed 50 characters',
                'nl' => 'Voornaam mag niet meer dan 50 karakters bevatten'
            ],
            'last_name_required' => [
                'en' => 'Last name is required',
                'nl' => 'Achternaam is verplicht'
            ],
            'last_name_min' => [
                'en' => 'Last name must be at least 2 characters',
                'nl' => 'Achternaam moet minimaal 2 karakters bevatten'
            ],
            'last_name_max' => [
                'en' => 'Last name cannot exceed 50 characters',
                'nl' => 'Achternaam mag niet meer dan 50 karakters bevatten'
            ],
            'email_required' => [
                'en' => 'Email address is required',
                'nl' => 'E-mailadres is verplicht'
            ],
            'email_invalid' => [
                'en' => 'Please enter a valid email address',
                'nl' => 'Voer een geldig e-mailadres in'
            ],
            'email_max' => [
                'en' => 'Email address cannot exceed 100 characters',
                'nl' => 'E-mailadres mag niet meer dan 100 karakters bevatten'
            ],
            'address_required' => [
                'en' => 'Address is required',
                'nl' => 'Adres is verplicht'
            ],
            'address_min' => [
                'en' => 'Address must be at least 10 characters',
                'nl' => 'Adres moet minimaal 10 karakters bevatten'
            ],
            'address_max' => [
                'en' => 'Address cannot exceed 255 characters',
                'nl' => 'Adres mag niet meer dan 255 karakters bevatten'
            ],
            'processing' => [
                'en' => 'Processing',
                'nl' => 'Verwerken'
            ]
        ];
        
        foreach ($uiTranslations as $key => $translations) {
            foreach ($translations as $langCode => $value) {
                Translation::updateOrCreate(
                    ['key' => $key, 'language_code' => $langCode],
                    ['value' => $value]
                );
            }
        }
    }
}