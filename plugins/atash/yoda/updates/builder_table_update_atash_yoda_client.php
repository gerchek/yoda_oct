<?php namespace Atash\Yoda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtashYodaClient extends Migration
{
    public function up()
    {
        Schema::table('atash_yoda_client', function($table)
        {
            $table->dropColumn('image');
            $table->dropColumn('item_image');
        });
    }
    
    public function down()
    {
        Schema::table('atash_yoda_client', function($table)
        {
            $table->string('image', 191);
            $table->string('item_image', 191);
        });
    }
}
