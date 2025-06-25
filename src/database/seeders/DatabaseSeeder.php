<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
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
            ['locale' => 'fr'],
            ['content' => 'Bienvenue dans notre boutique!']
        );
        
        // Create sample products
        $product1 = Product::updateOrCreate(
            ['image' => 'product1.jpg'],
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
            ['locale' => 'fr'],
            [
                'name' => 'Produit Exemple',
                'description' => 'C\'est un excellent produit'
            ]
        );
        
        $product2 = Product::updateOrCreate(
            ['image' => 'product2.jpg'],
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
            ['locale' => 'fr'],
            [
                'name' => 'Produit Premium',
                'description' => 'Notre article le plus vendu'
            ]
        );
    }
}