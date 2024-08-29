<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\BannerSeeder;
use Database\Seeders\NumberSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\PartnerSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\AdminPermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminSeeder::class);
        $this->call(AdminPermissionsSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(NumberSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}
