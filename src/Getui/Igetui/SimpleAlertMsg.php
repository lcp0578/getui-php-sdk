<?php
namespace Getui\Igetui;

use Getui\Igetui\ApnMsg;

class SimpleAlertMsg implements ApnMsg{
    var $alertMsg;

    public function get_alertMsg() {
        return $this->alertMsg;
    }
}
