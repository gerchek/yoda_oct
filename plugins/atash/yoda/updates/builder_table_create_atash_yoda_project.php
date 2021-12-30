<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashYodaProject extends Migration
{
    public function up()
    {
        Schema::create('atash_yoda_project', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_yoda_project');
    }
}
