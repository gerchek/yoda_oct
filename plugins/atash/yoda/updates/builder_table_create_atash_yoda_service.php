<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashYodaService extends Migration
{
    public function up()
    {
        Schema::create('atash_yoda_service', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_yoda_service');
    }
}
