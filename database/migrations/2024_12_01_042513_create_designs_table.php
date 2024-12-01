<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    public function up()
{
    Schema::table('designs', function (Blueprint $table) {
        $table->string('image_url', 512)->change(); // Change length to 512
    });
}

public function down()
{
    Schema::table('designs', function (Blueprint $table) {
        $table->string('image_url', 255)->change(); // Revert back to 255 if needed
    });
}
}
