<?php namespace iswtf\setinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIswtfSetinfoSinfos extends Migration
{
    public function up()
    {
        Schema::create('iswtf_setinfo_sinfos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iswtf_setinfo_sinfos');
    }
}
