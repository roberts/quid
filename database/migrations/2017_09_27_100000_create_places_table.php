<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('market_id')->index(); // Use for URL structure. Example drewroberts.com/florida/corona
            $table->unsignedInteger('brand_id')->index(); // If brand has own page, then assign here
            $table->string('slug')->unique()->index(); // How location will display on the front end of website. No underscores, only lowercase letters and dashes.
            $table->string('title')->unique(); // Name of place for display
            $table->string('description'); // Really is an excerpt for social.
            $table->unsignedInteger('image_id')->index(); // path to edited cover image for the place
            $table->unsignedInteger('video_id')->nullable(); // If want featured video at the top instead of image, then include the video id here.
            $table->unsignedInteger('type_id')->nullable(); // Use for primary grouping of places by types. Can use other categories as well, but this is primary industry (restaurants, coffee shops, cigars, parks, etc.)
            $table->text('content'); // Will be shown under video articles too
            $table->boolean('multiple')->default(0); // If is a franchise or part of company with multiple locations then put 1
            $table->date('first_visit')->default('2015-01-01'); // First time I went to place
            $table->date('opened')->default('2015-01-01'); // Estimated open date
            $table->date('closed')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zip', 5)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('gmaps')->nullable()->unique(); // ID for location's Google Maps page
            $table->string('facebook')->nullable()->unique(); // Username for location's facebook page
            $table->string('instagram')->nullable()->unique(); // Username for location's instagram account
            $table->string('twitter')->nullable()->unique(); // Username for location's twitter account
            $table->string('youtube')->nullable()->unique(); // Username for location's YouTube channel
            $table->decimal('latitude', 8, 6)->nullable();
            $table->decimal('longitude', 8, 6)->nullable();
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('places', function($table) {
            $table->foreign('market_id')->references('id')->on('markets')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('places', function ($table) {
            $table->dropForeign(['market_id']);
            $table->dropForeign(['brand_id']);
            $table->dropForeign(['image_id']);
            $table->dropForeign(['video_id']);
            $table->dropForeign(['type_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('places');
        Schema::enableForeignKeyConstraints();
    }
}
