<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            UITranslationSeeder::class
        ]);
        
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