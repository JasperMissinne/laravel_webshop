<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Product;
use App\Models\Translation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProductSeeder::class
        ]);

        // Create UI translations
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
        
        // Create or update pages with translations
        $homePage = Page::updateOrCreate(
            ['key' => 'home'],
            ['key' => 'home']
        );
        
        $homePage->translations()->updateOrCreate(
            ['locale' => 'en'],
            ['content' => 'Welcome to our shop!']
        );
        
        $homePage->translations()->updateOrCreate(
            ['locale' => 'nl'],
            ['content' => 'Welkom in onze winkel!']
        );
    }
}