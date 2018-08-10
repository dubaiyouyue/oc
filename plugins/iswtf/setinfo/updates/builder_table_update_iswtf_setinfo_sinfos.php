<?php namespace iswtf\setinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIswtfSetinfoSinfos extends Migration
{
    public function up()
    {
        Schema::table('iswtf_setinfo_sinfos', function($table)
        {
            $table->string('company');
            $table->string('address');
            $table->string('longitude');
            $table->string('latitude');
        });
    }
    
    public function down()
    {
        Schema::table('iswtf_setinfo_sinfos', function($table)
        {
            $table->dropColumn('company');
            $table->dropColumn('address');
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');
        });
    }
}
