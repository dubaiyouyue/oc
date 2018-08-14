<?php namespace iswtf\setinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIswtfSetinfoSinfos4 extends Migration
{
    public function up()
    {
        Schema::table('iswtf_setinfo_sinfos', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
            $table->string('logo')->change();
        });
    }
    
    public function down()
    {
        Schema::table('iswtf_setinfo_sinfos', function($table)
        {
            $table->dropColumn('deleted_at');
            $table->string('logo', 191)->change();
        });
    }
}
