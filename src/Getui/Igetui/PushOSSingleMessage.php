<?php
namespace Getui\Igetui;

use Getui\Protobuf\PBMessage;

class PushOSSingleMessage extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\Protobuf\Type\PBString';
    $this->values["1"] = '';
    $this->fields["2"] = 'Getui\Igetui\OSMessage';
    $this->values["2"] = '';
    $this->fields["3"] = 'Getui\Igetui\Target';
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
  function message()
  {
    return $this->_get_value("2");
  }
  function set_message($value)
  {
    return $this->_set_value("2", $value);
  }
  function target()
  {
    return $this->_get_value("3");
  }
  function set_target($value)
  {
    return $this->_set_value("3", $value);
  }
}
