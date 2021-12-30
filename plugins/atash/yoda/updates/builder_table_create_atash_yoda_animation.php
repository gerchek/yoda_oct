<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashYodaAnimation extends Migration
{
    public function up()
    {
        Schema::create('atash_yoda_animation', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_yoda_animation');
    }
}
