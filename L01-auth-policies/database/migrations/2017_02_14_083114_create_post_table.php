<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->string('content');
            $table->timestamps();
        });
        $now = date('Y-m-d H:i:s');
        $data = [
            [
                'user_id' => '1',
                'content' => 'Mucalscio1',
                'created_at' => $now
            ],[
                'user_id' => '1',
                'content' => 'Mucalscio2',
                'created_at' => $now
            ],[
                'user_id' => '1',
                'content' => 'Mucalscio3',
                'created_at' => $now
            ],[
                'user_id' => '2',
                'content' => 'Mucal1',
                'created_at' => $now
            ],[
                'user_id' => '2',
                'content' => 'Mucal2',
                'created_at' => $now
            ],[
                'user_id' => '2',
                'content' => 'Mucal3',
                'created_at' => $now
            ]
        ];
        \App\Post::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post');
    }
}
