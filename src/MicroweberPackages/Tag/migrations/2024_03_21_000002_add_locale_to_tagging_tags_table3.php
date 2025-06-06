<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class AddLocaleToTaggingTagsTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        if(!Schema::hasTable('tagging_tags')) {
            return;
        }

        Schema::table('tagging_tags', function (Blueprint $table) {
            if (!Schema::hasColumn('tagging_tags', 'locale')) {
                $table->string('locale')->nullable();
            }
        });
    }

};
