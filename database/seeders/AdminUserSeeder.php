<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Delete existing user first to ensure clean creation
        User::where('email', 'violet@violetkaponda.com')->delete();

        // Create fresh admin user
        $admin = User::create([
            'name' => 'Violet Nswana Kaponda',
            'email' => 'violet@violetkaponda.com',
            'password' => Hash::make('VioletAdmin2025!'),
            'is_admin' => true,
            'bio' => 'Fintech thought leader and speaker passionate about empowering Africa through technology.',
            'email_verified_at' => now(),
        ]);

        // Create categories (only if they don't exist)
        $categories = [
            [
                'name' => 'Fintech',
                'slug' => 'fintech',
                'description' => 'Financial technology insights and trends',
                'color' => '#ea580c',
                'is_active' => true
            ],
            [
                'name' => 'Digital Transformation',
                'slug' => 'digital-transformation',
                'description' => 'Digital innovation and transformation strategies',
                'color' => '#dc2626',
                'is_active' => true
            ],
            [
                'name' => 'Women in Tech',
                'slug' => 'women-in-tech',
                'description' => 'Empowering women in technology and leadership',
                'color' => '#f59e0b',
                'is_active' => true
            ],
            [
                'name' => 'African Innovation',
                'slug' => 'african-innovation',
                'description' => 'Innovation and entrepreneurship across Africa',
                'color' => '#059669',
                'is_active' => true
            ],
            [
                'name' => 'Speaking & Events',
                'slug' => 'speaking-events',
                'description' => 'Insights from speaking engagements and events',
                'color' => '#7c3aed',
                'is_active' => true
            ]
        ];

        foreach ($categories as $categoryData) {
            BlogCategory::firstOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );
        }

        $this->command->info('✅ Admin user created fresh:');
        $this->command->info('📧 Email: ' . $admin->email);
        $this->command->info('🔑 Password: VioletAdmin2025!');
        $this->command->info('🎉 New admin user created!');
        $this->command->info('⚠️  Please change the password after first login!');
    }
}
