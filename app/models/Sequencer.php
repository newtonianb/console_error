<?php

class Sequencer extends Eloquent {
  public $timestamps = true;

  /**
   * Relations
   */
  public function application() {
    return $this->morphTo();
  }

  public function specs() {
    return $this->belongsToMany('Spec')->withTimestamps()->withPivot('value');
  }

}
