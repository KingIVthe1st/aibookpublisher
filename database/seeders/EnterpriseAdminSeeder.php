<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class EnterpriseAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin role if it doesn't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);

        // Find the highest tier plan (by price and features)
        $enterprisePlan = SubscriptionPlan::where('status', 'active')
            ->orderBy('price', 'desc')
            ->orderBy('words', 'desc')
            ->first();

        if (!$enterprisePlan) {
            // Create a custom enterprise plan if none exists
            $enterprisePlan = SubscriptionPlan::create([
                'plan_name' => 'Enterprise Unlimited',
                'price' => 999.99,
                'currency' => 'USD',
                'status' => 'active',
                'templates' => 'all',
                'model' => 'gpt-4',
                'chats' => 'all',
                'words' => 999999999,
                'images' => 999999999,
                'max_tokens' => 128000,
                'payment_frequency' => 'lifetime',
                'primary_heading' => 'Enterprise',
                'featured' => true,
                'free' => false,
                'image_feature' => true,
                'plan_features' => json_encode([
                    'Unlimited AI Content Generation',
                    'Unlimited Image Generation',
                    'GPT-4 Access',
                    'All Templates',
                    'Unlimited Chat',
                    'Priority Support',
                    'API Access',
                    'Team Management',
                    'Advanced Analytics'
                ]),
                'characters' => 999999999,
                'minutes' => 999999999,
                'image_storage_days' => 36500,
                'voiceover_storage_days' => 36500,
                'whisper_storage_days' => 36500,
                'voiceover_feature' => true,
                'transcribe_feature' => true,
                'code_feature' => true,
                'chat_feature' => true,
            ]);
        }

        // Create the enterprise admin user
        $user = User::create([
            'name' => 'Ivan Lee Jackson',
            'email' => 'ivanleejackson@gmail.com',
            'password' => Hash::make('OptP4ss1#!'),
            'email_verified_at' => Carbon::now(),
            'status' => 'active',
            'group' => 'admin',
            'plan_id' => $enterprisePlan->id,
            'plan_type' => 'subscription',
            'available_words' => 999999999,
            'available_words_prepaid' => 999999999,
            'total_words' => 0,
            'available_images' => 999999999,
            'available_images_prepaid' => 999999999,
            'total_images' => 0,
            'available_chars' => 999999999,
            'available_chars_prepaid' => 999999999,
            'total_chars' => 0,
            'available_minutes' => 999999999,
            'available_minutes_prepaid' => 999999999,
            'total_minutes' => 0,
            'member_limit' => 999,
            'country' => 'United States',
            'default_template_language' => 'en-US',
            'default_voiceover_language' => 'en-US',
        ]);

        // Assign admin role
        $user->assignRole('admin');

        $this->command->info('Enterprise admin account created successfully!');
        $this->command->info('Email: ivanleejackson@gmail.com');
        $this->command->info('Password: OptP4ss1#!');
        $this->command->info('Plan: ' . $enterprisePlan->plan_name);
    }
}
