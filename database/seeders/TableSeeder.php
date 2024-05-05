<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services= ['blog', 'user', 'order', 'cart', 'product'];
        $tables= [
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'users' ],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'role_user' ],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'roles' ],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'permission_role'],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'permissions'],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'addresses'],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'tickets'],
            ['service_id' => Service::query()->where('name', 'user')->first()->id,     'name'=> 'messages'],

            ['service_id' => Service::query()->where('name', 'blog')->first()->id,     'name'=> 'news'],
            ['service_id' => Service::query()->where('name', 'blog')->first()->id,     'name'=> 'comments'],
            ['service_id' => Service::query()->where('name', 'blog')->first()->id,     'name'=> 'articles'],
            ['service_id' => Service::query()->where('name', 'blog')->first()->id,     'name'=> 'article_category'],
            ['service_id' => Service::query()->where('name', 'blog')->first()->id,     'name'=> 'taggable'],
            ['service_id' => Service::query()->where('name', 'blog')->first()->id,     'name'=> 'tags'],

            ['service_id' => Service::query()->where('name', 'order')->first()->id,     'name'=> 'order'],
            ['service_id' => Service::query()->where('name', 'order')->first()->id,     'name'=> 'shipping_method'],
            ['service_id' => Service::query()->where('name', 'order')->first()->id,     'name'=> 'discount_code'],
            ['service_id' => Service::query()->where('name', 'order')->first()->id,     'name'=> 'gateway'],
            ['service_id' => Service::query()->where('name', 'order')->first()->id,     'name'=> 'order_product'],

            ['service_id' => Service::query()->where('name', 'cart')->first()->id,     'name'=> 'cart'],
            ['service_id' => Service::query()->where('name', 'cart')->first()->id,     'name'=> 'cart_product'],

            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'category'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'usage'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'features'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'category_spec'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'category_comment'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'spec'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'value'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'product_spec_value'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'product'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'price'],
            ['service_id' => Service::query()->where('name', 'product')->first()->id,  'name'=> 'chart_price'],

        ];

        foreach ($tables as $table)
            Table::query()->create($table);
    }
}
