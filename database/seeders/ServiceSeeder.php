<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services= ['blog', 'user', 'order', 'cart', 'product'];

        foreach ($services as $service)
            Service::query()->create(['name' => $service]);
    }
}
