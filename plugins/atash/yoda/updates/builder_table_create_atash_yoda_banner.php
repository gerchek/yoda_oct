<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashYodaBanner extends Migration
{
    public function up()
    {
        Schema::create('atash_yoda_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_yoda_banner');
    }
}
