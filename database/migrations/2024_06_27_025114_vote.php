<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->string('matric');
            $table->string('presidential_candidate');
            $table->string('vice_presidential_candidate');
            $table->string('general_secetary');
            $table->string('ass_general_secetary');
            $table->string('treasurer');
            $table->string('welfare');
            $table->string('ass_welfare');
            $table->string('sport');
            $table->string('ass_sport');
            $table->string('social');
            $table->string('ass_social');
            $table->string('financial_sec');
            $table->string('pro');
            $table->string('env');
            $table->string('chief_whip');
            $table->string('startup');
            $table->string('ass_startup');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
