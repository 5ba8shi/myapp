<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('entries')->insert([
             'title'=>'entry01',
             'content'=>'hello',
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
         ]);
         
         DB::table('entries')->insert([
             'title'=>'entry02',
             'content'=>'今日からよろしく！',
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
         ]);

         DB::table('entries')->insert([
             'title'=>'entry03',
             'content'=>'あなたの後ろにいるよ!',
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s')
         ]);
    }
}
