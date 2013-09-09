<?php

class Spec extends Eloquent {
  public $timestamps = false;

  /**
   * Relations
   */

  public function sequencers() {
    return $this->belongsToMany('Sequencer')->withTimestamps()->withPivot('value');
  }
}
