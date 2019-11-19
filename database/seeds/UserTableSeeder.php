<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            App\User::create([
                'name'=>sprintf('%s %s', Str::random(3),Str::random(4)), //version up 으로 str_random() -> Str::random()
                'email'=>Str::random(10).'@example.com',
                'password'=>bcrypt('password'),
            ]);
            factory(App\User::class, 2)->create();

        
    }
}
