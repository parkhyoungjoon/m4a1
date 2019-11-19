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
        if(config('database.default') !== 'sqlite'){
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        // model::unguard();
        
        App\User::truncate();
        $this->call(UserTableSeeder::class);

        App\Article::truncate();
        $this->call(ArticleTableSeeder::class);

        // model::unguard();
        if(config('database.default') !== 'sqlite'){
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
        // $this->call(UsersTableSeeder::class);
    }
}
