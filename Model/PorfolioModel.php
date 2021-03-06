<?php

class PorfolioModel {
  private $dateStart;
  private $dateEnd;
  private $amount;
  private $yearAmount;

  public function __construct(){}

  /**
   * @return mixed
   */
  public function getDateStart() {
    return $this->dateStart;
  }

  /**
   * @param mixed $dateStart
   */
  public function setDateStart( $dateStart ) {
    $this->dateStart = $dateStart;
  }

  /**
   * @return mixed
   */
  public function getDateEnd() {
    return $this->dateEnd;
  }

  /**
   * @param mixed $dateEnd
   */
  public function setDateEnd( $dateEnd ) {
    $this->dateEnd = $dateEnd;
  }

  /**
   * @return mixed
   */
  public function getAmount() {
    return $this->amount;
  }

  /**
   * @param mixed $amount
   */
  public function setAmount( $amount ) {
    $this->amount = $amount;
  }

  /**
   * @return mixed
   */
  public function getYearAmount() {
    return $this->yearAmount;
  }

  /**
   * @param mixed $yearAmount
   */
  public function setYearAmount( $yearAmount ) {
    $this->yearAmount = $yearAmount;
  }
}