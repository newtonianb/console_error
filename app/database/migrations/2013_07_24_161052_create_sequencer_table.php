<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSequencerTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('sequencers', function(Blueprint $table) {
      $table->increments('id');
      $table->timestamps();

      $table->unsignedInteger('application_id');
      $table->string('application_type');

      $table->unsignedInteger('user_id');

      $table->engine = 'InnoDB';
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('sequencers');
  }

}
