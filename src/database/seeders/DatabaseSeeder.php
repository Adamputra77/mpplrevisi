<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');

        $this->call([
            DimWaktuSeeder::class,
            DimDepartemenSeeder::class,
            DimAkunSeeder::class,
            DimProyekSeeder::class,
            DimWilayahSeeder::class,
            FactKeuanganSeeder::class,
        ]);

    }
}
