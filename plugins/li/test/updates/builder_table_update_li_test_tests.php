<?php namespace Li\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLiTestTests extends Migration
{
    public function up()
    {
        Schema::table('li_test_tests', function($table)
        {
            $table->text('content');
            $table->string('title', 65535)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('li_test_tests', function($table)
        {
            $table->dropColumn('content');
            $table->text('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
