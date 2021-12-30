<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashYodaClient extends Migration
{
    public function up()
    {
        Schema::create('atash_yoda_client', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('image');
            $table->string('item_image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_yoda_client');
    }
}
