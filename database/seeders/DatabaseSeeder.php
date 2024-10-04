<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Admin\Video::factory(10)->create();
        // \App\Models\Admin\slider::factory(10)->create();
        // \App\Models\Admin\seminar::factory(10)->create();
        // \App\Models\Admin\pictureMedia::factory(10)->create();
        // \App\Models\Admin\news::factory(10)->create();
        // \App\Models\Admin\member::factory(10)->create();
        // \App\Models\Admin\gallery::factory(10)->create();

        // \App\Models\Admin\categories::factory(10)->create();
        // \App\Models\Admin\contact::factory(10)->create();
        // \App\Models\Admin\officerInteraction::factory(10)->create();
        \App\Models\Admin\actiontakenreport::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
