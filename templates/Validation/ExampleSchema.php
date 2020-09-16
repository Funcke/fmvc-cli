<?php
use Dry\DryStruct;

class ExampleSchema extends DryStruct 
{
  public function __construct() {
    parent::__construct();
    $this->required('name')->filled('string');
    $this->optional('age')->filled('integer')->min(6);
  }
}