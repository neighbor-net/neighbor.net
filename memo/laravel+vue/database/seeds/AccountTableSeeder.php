<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                'code'       => '5501',
                'name'       => '本田宗一郎',
                'username'   => 'honda',
                'password'   => bcrypt('honda'),
                'active'     => true,
            ],
            [
                'code'       => '5502',
                'name'       => '山葉寅楠',
                'username'   => 'yamaha',
                'password'   => bcrypt('yamaha'),
                'active'     => true,
            ],
            [
                'code'       => '5503',
                'name'       => '鈴木道雄',
                'username'   => 'suzuki',
                'password'   => bcrypt('suzuki'),
                'active'     => true,
            ],
            [
                'code'       => '5504',
                'name'       => '川崎正蔵',
                'username'   => 'kawasaki',
                'password'   => bcrypt('kawasaki'),
                'active'     => false,
            ],
        ]);
    }
}
