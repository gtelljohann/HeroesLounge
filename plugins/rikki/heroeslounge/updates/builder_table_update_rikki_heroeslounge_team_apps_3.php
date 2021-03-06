<?php namespace Rikki\Heroeslounge\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRikkiHeroesloungeTeamApps43 extends Migration
{
    public function up()
    {
        Schema::table('rikki_heroeslounge_team_apps', function($table)
        {
            $table->boolean('withdrawn');
        });
    }
    
    public function down()
    {
        Schema::table('rikki_heroeslounge_team_apps', function($table)
        {
            $table->dropColumn('withdrawn');
        });
    }
}
