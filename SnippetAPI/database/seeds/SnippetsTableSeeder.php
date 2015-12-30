<?php

use Illuminate\Database\Seeder;
use App\Snippet;

class SnippetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->delete();
        	User::create([
				'id'=> '1',
				'content'=> '曲项向天歌，白毛浮绿水，红掌拨清波',
				'is_top'=> '0',
				'times'=>'1',
        	],[
				'id'=> '2',
				'content'=> '春眠不觉晓，处处闻啼鸟',
				'is_top'=> '0',
				'times'=>'2',
        	]);    
    }
}
