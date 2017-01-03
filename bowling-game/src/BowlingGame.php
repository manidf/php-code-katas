<?php

class BowlingGame {

  protected $rolls = [];

  public function roll($pins)
  {
    $this->rolls[] = $pins;
  }

  public function score()
  {
    $score = 0;
    $roll = 0;

    for ($frame = 1; $frame <= 10; $frame++)
    {
      if ($this->isStrike($roll)) // then its a strike
      {
        $score += 10 + $this->strikeBonus($roll);
        $roll += 1;
      }
      elseif ($this->isSpare($roll))
      {
        $score += 10 + $this->spareBonus($roll);

      }
      else
      {
        $score += $this->getDefaultFrameScore($roll);
        $roll += 2;
      }
    }

    return $score;
  }

  /**
   * @param $roll
   * @return bool
   */
  public function isSpare($roll) {
    return $this->getDefaultFrameScore($roll) == 10;
  }

  /**
   * @param $roll
   * @return mixed
   */
  public function getDefaultFrameScore($roll) {
    return $this->rolls[$roll] + $this->rolls[$roll + 1];
  }

  /**
   * @param $roll
   * @return bool
   */
  public function isStrike($roll) {
    return $this->rolls[$roll] == 10;
  }

  public function strikeBonus($roll)
  {
    $this->rolls[$roll +1] + $this->rolls[$roll + 2];
  }

  /**
   * @return array
   */
  public function spareBonus($roll) {
    $this->rolls[$roll + 2];
  }
}
