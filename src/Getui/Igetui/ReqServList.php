<?php
namespace Getui\Igetui;

use Getui\Protobuf\PBMessage;

class ReqServList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\Protobuf\Type\PBString';
    $this->values["1"] = '';
    $this->fields["3"] = 'Getui\Protobuf\Type\PBInt';
    $this->values["3"] = '';
  }
  function seqId()
  {
    return $this->_get_value("1");
  }
  function set_seqId($value)
  {
    return $this->_set_value("1", $value);
  }
  function timestamp()
  {
    return $this->_get_value("3");
  }
  function set_timestamp($value)
  {
    return $this->_set_value("3", $value);
  }
}
