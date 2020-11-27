<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo')->insert([
            [
                'title'      => 'カレーの材料を調達する',
                'begin_date' => '2020-10-02',
                'end_date'   => '2020-10-02',
                'man_hour'   => 4.5,
                'note'       => 'マカロニ、シーフードミックス、ちくわ',
                'done'       => true,
            ],
            [
                'title'      => '町内会行事の打ち合わせ',
                'begin_date' => '2020-10-14',
                'end_date'   => '2020-10-14',
                'man_hour'   => 2,
                'note'       => '週末の公園清掃の段取りを話し合う。',
                'done'       => false,
            ],
        ]);
    }
}
