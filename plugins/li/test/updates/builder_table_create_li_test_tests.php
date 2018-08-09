<?php namespace Li\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLiTestTests extends Migration
{
    public function up()
    {
        Schema::create('li_test_tests', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('li_test_tests');
    }
}
