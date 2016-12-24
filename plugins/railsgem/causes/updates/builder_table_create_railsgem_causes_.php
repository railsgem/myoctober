<?php namespace Railsgem\Causes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRailsgemCauses extends Migration
{
    public function up()
    {
        Schema::create('railsgem_causes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('railsgem_causes_');
    }
}
