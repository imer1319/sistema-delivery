<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class,5)->create();
        $this->call(RoleAndPermissionSeeder::class);
        factory(App\User::class,10)->create();
        factory(App\Client::class,20)->create();
        factory(App\Driver::class,50)->create();
        factory(App\Restaurant::class,10)->create();
        factory(App\Invoce::class,300)->create()
        ->each(function (App\Invoce $invoce){
            $invoce->restaurants()->attach([
                rand(1,5),
                rand(5,10)
            ]);
        });
        factory(App\Address::class,20)->create();
    }
}
