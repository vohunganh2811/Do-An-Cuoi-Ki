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

        DB::table('pricerange')->insert([
            [ 'price1'=>"1000000",
                'price2'=>"5000000"
            ],

            [ 'price1'=>"5000000",
                'price2'=>"10000000"
            ],

            [ 'price1'=>"10000000",
                'price2'=>"15000000"
            ],

            [ 'price1'=>"15000000",
                'price2'=>"20000000"
            ],

            [ 'price1'=>"20000000",
                'price2'=>"25000000"
            ],

            [ 'price1'=>"25000000",
                'price2'=>"30000000"
            ],
         ]);
        //$this->call(UsersTableSeeder::class);
        // DB::table('usertype')->insert([
        //     [ 'name'=>"User"],
 
        //      [ 'name'=>"Admin"]
        //  ]);

        //  DB::table('users')->insert([
        //     [ 'name'=>"phuoc",
        //      'email'=>"phuoc@gmail.com",
        //      'password'=>bcrypt('123'),
        //     'usertype'=>"1",
        //     'social_id'=>"",
        //     'avatar'=>"",
        //     'ruler'=>"0",
        //     'status'=>"0",
        //     'logintype'=>"0",
        //     'deleted'=>"0"],
 
        //      [ 'name'=>"giang",
        //      'email'=>"giang@gmail.com",
        //      'password'=>bcrypt('123'),
        //      'usertype'=>"1",
        //      'social_id'=>"",
        //      'avatar'=>"",
        //      'ruler'=>"0",
        //      'status'=>"0",
        //      'logintype'=>"0",
        //      'deleted'=>"0"],

        //      [ 'name'=>"hang",
        //      'email'=>"hang@gmail.com",
        //      'password'=>bcrypt('123'),
        //      'usertype'=>"1",
        //      'social_id'=>"",
        //     'avatar'=>"",
        //     'ruler'=>"0",
        //     'status'=>"0",
        //     'logintype'=>"0",
        //     'deleted'=>"0"]
        //  ]);

         
    }
}
