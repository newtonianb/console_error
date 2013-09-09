<?php

class Strand extends Eloquent {
  public $timestamps = false;

  /**
   * Relations
   */
  public function sequencer() {
    return $this->morphOne('Sequencer', 'application');
  }

}
