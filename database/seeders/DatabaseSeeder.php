<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Offer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('123'),
                'bio' => 'I am a web developer.',
                'tarifs' => 150.00
            ]
        );

        // 3. إنشاء شوية ديال العروض التجريبية (Offers)
        Offer::create([
            'title' => 'Web Developer Needed',
            'description' => 'We are looking for a Laravel developer to build an API.',
            'budget' => 1200.00
        ]);

        Offer::create([
            'title' => 'UI/UX Designer for CreatorHub',
            'description' => 'Design a collaborative workspace dashboard.',
            'budget' => 800.00
        ]);
    }
}