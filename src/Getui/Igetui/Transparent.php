<?php
namespace Getui\Igetui;

use Getui\Protobuf\PBMessage;

class Transparent extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = 'Getui\Protobuf\Type\PBString';
    $this->values["1"] = '';
    $this->fields["2"] = 'Getui\Protobuf\Type\PBString';
    $this->values["2"] = '';
    $this->fields["3"] = 'Getui\Protobuf\Type\PBString';
    $this->values["3"] = '';
    $this->fields["4"] = 'Getui\Protobuf\Type\PBString';
    $this->values["4"] = '';
    $this->fields["5"] = 'Getui\Protobuf\Type\PBString';
    $this->values["5"] = '';
    $this->fields["6"] = 'Getui\Protobuf\Type\PBString';
    $this->values["6"] = '';
    $this->fields["7"] = 'Getui\Igetui\PushInfo';
    $this->values["7"] = '';
    $this->fields["8"] = 'Getui\Igetui\ActionChain';
    $this->values["8"] = array();
    $this->fields["9"] = 'Getui\Protobuf\Type\PBString';
    $this->values["9"] = array();
    $this->fields["10"] = 'Getui\Protobuf\Type\PBInt';
    $this->values["10"] = '';
    $this->fields["11"] = 'Getui\Protobuf\Type\PBString';
    $this->values["11"] = '';
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function action()
  {
    return $this->_get_value("2");
  }
  function set_action($value)
  {
    return $this->_set_value("2", $value);
  }
  function taskId()
  {
    return $this->_get_value("3");
  }
  function set_taskId($value)
  {
    return $this->_set_value("3", $value);
  }
  function appKey()
  {
    return $this->_get_value("4");
  }
  function set_appKey($value)
  {
    return $this->_set_value("4", $value);
  }
  function appId()
  {
    return $this->_get_value("5");
  }
  function set_appId($value)
  {
    return $this->_set_value("5", $value);
  }
  function messageId()
  {
    return $this->_get_value("6");
  }
  function set_messageId($value)
  {
    return $this->_set_value("6", $value);
  }
  function pushInfo()
  {
    return $this->_get_value("7");
  }
  function set_pushInfo($value)
  {
    return $this->_set_value("7", $value);
  }
  function actionChain($offset)
  {
    return $this->_get_arr_value("8", $offset);
  }
  function add_actionChain()
  {
    return $this->_add_arr_value("8");
  }
  function set_actionChain($index, $value)
  {
    $this->_set_arr_value("8", $index, $value);
  }
  function remove_last_actionChain()
  {
    $this->_remove_last_arr_value("8");
  }
  function actionChain_size()
  {
    return $this->_get_arr_size("8");
  }
  function condition($offset)
  {
    $v = $this->_get_arr_value("9", $offset);
    return $v->get_value();
  }
  function append_condition($value)
  {
    $v = $this->_add_arr_value("9");
    $v->set_value($value);
  }
  function set_condition($index, $value)
  {
    $v = new $this->fields["9"]();
    $v->set_value($value);
    $this->_set_arr_value("9", $index, $v);
  }
  function remove_last_condition()
  {
    $this->_remove_last_arr_value("9");
  }
  function condition_size()
  {
    return $this->_get_arr_size("9");
  }
  function templateId()
  {
    return $this->_get_value("10");
  }
  function set_templateId($value)
  {
    return $this->_set_value("10", $value);
  }
  function taskGroupId()
  {
    return $this->_get_value("11");
  }
  function set_taskGroupId($value)
  {
    return $this->_set_value("11", $value);
  }
}
