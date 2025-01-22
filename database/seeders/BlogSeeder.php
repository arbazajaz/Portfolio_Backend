<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert Categories
        DB::table(config('filamentblog.tables.prefix') . 'categories')->insert([
            ['name' => 'Technology', 'slug' => Str::slug('Technology')],
            ['name' => 'Health', 'slug' => Str::slug('Health')],
            ['name' => 'Travel', 'slug' => Str::slug('Travel')],
            ['name' => 'Food', 'slug' => Str::slug('Food')],
            ['name' => 'Lifestyle', 'slug' => Str::slug('Lifestyle')],
        ]);

        // Insert Tags
        DB::table(config('filamentblog.tables.prefix') . 'tags')->insert([
            ['name' => 'PHP', 'slug' => Str::slug('PHP')],
            ['name' => 'Laravel', 'slug' => Str::slug('Laravel')],
            ['name' => 'VueJS', 'slug' => Str::slug('VueJS')],
            ['name' => 'API', 'slug' => Str::slug('API')],
            ['name' => 'Web Development', 'slug' => Str::slug('Web Development')],
        ]);

        // Insert Posts
        DB::table(config('filamentblog.tables.prefix') . 'posts')->insert([
            [
                'title' => 'Introduction to Laravel',
                'slug' => Str::slug('Introduction to Laravel'),
                'sub_title' => 'Getting started with Laravel framework',
                'body' => 'Laravel is a PHP framework that makes web development easy and enjoyable.',
                'status' => 'published',
                'published_at' => now(),
                'scheduled_for' => null,
                'cover_photo_path' => '/images/laravel-intro.jpg',
                'photo_alt_text' => 'Laravel Introduction',
                'user_id' => 1, // Change this to a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Understanding API Development',
                'slug' => Str::slug('Understanding API Development'),
                'sub_title' => 'Learn how to create APIs with Laravel',
                'body' => 'API development is crucial for modern applications.',
                'status' => 'published',
                'published_at' => now(),
                'scheduled_for' => null,
                'cover_photo_path' => '/images/api-development.jpg',
                'photo_alt_text' => 'API Development',
                'user_id' => 1, // Change this to a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert SEO Details
        DB::table(config('filamentblog.tables.prefix') . 'seo_details')->insert([
            [
                'post_id' => 1, // Change this to a valid post ID
                'title' => 'Introduction to Laravel - SEO Title',
                'keywords' => json_encode(['Laravel', 'PHP', 'Framework']),
                'description' => 'Learn the basics of the Laravel framework.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2, // Change this to a valid post ID
                'title' => 'Understanding API Development - SEO Title',
                'keywords' => json_encode(['API', 'Laravel', 'Development']),
                'description' => 'An overview of creating APIs using Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Comments
        DB::table(config('filamentblog.tables.prefix') . 'comments')->insert([
            [
                'post_id' => 1, // Change this to a valid post ID
                'user_id' => 1, // Change this to a valid user ID
                'comment' => 'Great introduction to Laravel!',
                'approved' => true,
                'approved_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2, // Change this to a valid post ID
                'user_id' => 1, // Change this to a valid user ID
                'comment' => 'Very helpful article on API development.',
                'approved' => true,
                'approved_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Newsletter Subscribers
        DB::table(config('filamentblog.tables.prefix') . 'news_letters')->insert([
            ['email' => 'john.doe@example.com', 'subscribed' => true, 'created_at' => now(), 'updated_at' => now()],
            ['email' => 'jane.doe@example.com', 'subscribed' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insert Settings
        DB::table(config('filamentblog.tables.prefix') . 'settings')->insert([
            'title' => 'My Blog',
            'description' => 'Welcome to my blog.',
            'logo' => '/images/logo.png',
            'favicon' => '/images/favicon.ico',
            'organization_name' => 'My Blog Company',
            'google_console_code' => 'example-console-code',
            'google_analytic_code' => 'example-analytic-code',
            'google_adsense_code' => 'example-adsense-code',
            'quick_links' => json_encode(['About Us', 'Contact']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
