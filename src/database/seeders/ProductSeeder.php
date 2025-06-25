<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
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

        $product3 = Product::updateOrCreate(
            ['price' => 14.99]
        );

        $product3->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'name' => 'Basic T-Shirt',
                'description' => 'Comfortable cotton t-shirt for everyday wear'
            ]
        );

        $product3->translations()->updateOrCreate(
            ['locale' => 'nl'],
            [
                'name' => 'Basic T-Shirt',
                'description' => 'Comfortabel katoenen t-shirt voor dagelijks gebruik'
            ]
        );

        $product4 = Product::updateOrCreate(
            ['price' => 49.99]
        );

        $product4->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Noise-cancelling wireless headphones with 30hr battery'
            ]
        );

        $product4->translations()->updateOrCreate(
            ['locale' => 'nl'],
            [
                'name' => 'Draadloze Koptelefoon',
                'description' => 'Draadloze koptelefoon met ruisonderdrukking en 30 uur accuduur'
            ]
        );

        $product5 = Product::updateOrCreate(
            ['price' => 9.99]
        );

        $product5->translations()->updateOrCreate(
            ['locale' => 'en'],
            [
                'name' => 'Phone Case',
                'description' => 'Durable protective case for your smartphone'
            ]
        );

        $product5->translations()->updateOrCreate(
            ['locale' => 'nl'],
            [
                'name' => 'Telefoonhoesje',
                'description' => 'Duurzaam beschermend hoesje voor je smartphone'
            ]
        );
    }
}