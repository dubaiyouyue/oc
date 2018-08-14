<?php namespace iswtf\setinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIswtfSetinfoSinfos2 extends Migration
{
    public function up()
    {
        Schema::table('iswtf_setinfo_sinfos', function($table)
        {
            $table->string('tel');
        });
    }
    
    public function down()
    {
        Schema::table('iswtf_setinfo_sinfos', function($table)
        {
            $table->dropColumn('tel');
        });
    }
}
