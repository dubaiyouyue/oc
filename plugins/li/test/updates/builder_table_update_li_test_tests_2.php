<?php namespace Li\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLiTestTests2 extends Migration
{
    public function up()
    {
        Schema::table('li_test_tests', function($table)
        {
            $table->string('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('li_test_tests', function($table)
        {
            $table->text('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
