<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashYodaVideo extends Migration
{
    public function up()
    {
        Schema::create('atash_yoda_video', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('url_video');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_yoda_video');
    }
}
