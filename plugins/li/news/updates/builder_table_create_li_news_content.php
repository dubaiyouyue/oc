<?php namespace Li\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLiNewsContent extends Migration
{
    public function up()
    {
        Schema::create('li_news_content', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('li_news_content');
    }
}
