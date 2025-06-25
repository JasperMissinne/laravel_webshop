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
                'nl' => 'Toevoegen aan winkelwagen'
            ],
            'no_products' => [
                'en' => 'No products found',
                'nl' => 'Geen producten gevonden'
            ],
            'add_products_message' => [
                'en' => 'Get started by adding some products to your database.',
                'nl' => 'Begin door enkele producten aan uw database toe te voegen.'
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
        
        // Create sample products
        $product1 = Product::updateOrCreate(
            ['price' => 19.99]
        );
        
        $product1->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'name' => 'Example Product',
                'description' => 'This is a great product'
            ]
        );
        
        $product1->translations()->updateOrCreate(
            ['locale' => 'nl'],
            [
                'name' => 'Voorbeeld Product',
                'description' => 'Dit is een geweldig product'
            ]
        );
        
        $product2 = Product::updateOrCreate(
            ['price' => 29.99]
        );
        
        $product2->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'name' => 'Premium Product',
                'description' => 'Our best selling item'
            ]
        );
        
        $product2->translations()->updateOrCreate(
            ['locale' => 'nl'],
            [
                'name' => 'Premium Product',
                'description' => 'Ons best verkopende artikel'
            ]
        );
    }
}