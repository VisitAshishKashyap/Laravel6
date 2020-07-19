<?php

use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->insert([
             'user_id'=>Str::random(5),
             'address'=>Str::random(5);
             'photo'=>null;
             'phone'=>Str::random(5);


            ]);

            }
}
