<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSequencerSpecTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('sequencer_spec', function(Blueprint $table) {
      $table->unsignedInteger('sequencer_id');
      $table->unsignedInteger('spec_id');
      $table->string('value');
      $table->timestamps();

      $table->engine = 'InnoDB';
      $table->primary(array('sequencer_id', 'spec_id'));
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('sequencer_spec');
  }

}
