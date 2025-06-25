<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
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
            ['locale' => 'nl'],
            [
                'name' => 'Product Voorbeeld',
                'description' => 'Dit is een geweldig product'
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
            ['locale' => 'nl'],
            [
                'name' => 'Premium Product',
                'description' => 'Ons best verkochte artikel'
            ]
        );
    }
}