<?php

use Illuminate\Database\Seeder;
use App\Investment;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user table seeder
        DB::table('users')->insert([
            'first_name' => 'moses',
            'last_name' => 'west',
            'email' => 'email1@email.com',
            'country' => 'nigeria',
            'state' => 'rivers',
            'gender' => 'male',
            'ref' => '',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'man',
            'last_name' => 'noman',
            'email' => 'email2@email.com',
            'country' => 'nigeria',
            'state' => 'rivers',
            'gender' => 'male',
            'ref' => 'email1@email.com',
            'password' => bcrypt('password'),
        ]);

        $investment = new Investment;
        $investment->bundle_plan = 'Bronze';
        $investment->email = 'email1@email.com';
        $investment->amount = '1000';
        $investment->wallet_id = 'id';
        $investment->wallet_email = 'wallet_email';
        $investment->user_id = '1';
        $investment->save();

        $investment = new Investment;
        $investment->bundle_plan = 'Bronze';
        $investment->email = 'email2@email.com';
        $investment->amount = '500000';
        $investment->wallet_id = 'id';
        $investment->wallet_email = 'wallet_email2e';
        $investment->user_id = '2';
        $investment->save();
    }
}
