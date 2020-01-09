<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescricaoTableMeuBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meu_blogs', function (Blueprint $table) {
           $table->longtext('descricao_1') 
                    ->nullable(); 
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meu_blogs', function (Blueprint $table) {
            $table->dropColumn('descricao_1');
        });
    }
}
