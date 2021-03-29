<?php
namespace Getui\Igetui;

use Getui\Protobuf\Type\PBEnum;

class ServerNotify_NotifyType extends PBEnum
{
  const normal  = 0;
  const serverListChanged  = 1;
  const exception  = 2;
}
