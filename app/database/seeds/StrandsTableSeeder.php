<?php

class StrandsTableSeeder extends Seeder {

  public function run() {
    DB::table('strands')->delete();
    DB::table('sequencers')->delete();

    $strand = new Strand(array('name' => 'CCE'));
    $strand->save();

    $user_id = 1;
    $sequencer = $strand->sequencer()->create(compact('user_id'));
    $sequencer->specs()->attach(1, array('value' => 'AAA'));
  }

}
