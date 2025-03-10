<?php
namespace Getui\Igetui;

use Getui\Protobuf\PBMessage;

class GtAuthResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\Protobuf\Type\PBInt';
    $this->values["1"] = '';
    $this->fields["2"] = 'Getui\Protobuf\Type\PBString';
    $this->values["2"] = '';
    $this->fields["3"] = 'Getui\Protobuf\Type\PBString';
    $this->values["3"] = '';
    $this->fields["4"] = 'Getui\Protobuf\Type\PBString';
    $this->values["4"] = '';
    $this->fields["5"] = 'Getui\Protobuf\Type\PBString';
    $this->values["5"] = array();
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function redirectAddress()
  {
    return $this->_get_value("2");
  }
  function set_redirectAddress($value)
  {
    return $this->_set_value("2", $value);
  }
  function seqId()
  {
    return $this->_get_value("3");
  }
  function set_seqId($value)
  {
    return $this->_set_value("3", $value);
  }
  function info()
  {
    return $this->_get_value("4");
  }
  function set_info($value)
  {
    return $this->_set_value("4", $value);
  }
  function appid($offset)
  {
    $v = $this->_get_arr_value("5", $offset);
    return $v->get_value();
  }
  function append_appid($value)
  {
    $v = $this->_add_arr_value("5");
    $v->set_value($value);
  }
  function set_appid($index, $value)
  {
    $v = new $this->fields["5"]();
    $v->set_value($value);
    $this->_set_arr_value("5", $index, $v);
  }
  function remove_last_appid()
  {
    $this->_remove_last_arr_value("5");
  }
  function appid_size()
  {
    return $this->_get_arr_size("5");
  }
}
