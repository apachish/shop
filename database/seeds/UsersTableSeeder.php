<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\User::class,20)->create()->each(function ($user){
//            $user->products()->save(factory(\App\Product::class)->make());
//        });
        factory(\App\User::class,20)->create()->each(function ($user){
            $user->products()->create(factory(\App\Product::class)->make()->toArray())->categories()->attach($this->get_random_category_id());
        });
    }
    private function get_random_category_id()
    {
        $random_category = \App\Category::inRandomOrder()->first();
        return !is_null($random_category) ? [$random_category->id] : [];
    }
}
