<?php
namespace Getui\Protobuf\Type;

use Getui\Protobuf\Type\PBInt;
use Getui\Protobuf\PBMessage;
/**
 * @author Nikolai Kordulla
 */
class PBBool extends PBInt
{
	var $wired_type = PBMessage::WIRED_VARINT;

	/**
	 * Parses the message for this type
	 *
	 * @param array
	 */
	public function ParseFromArray()
	{
		$this->value = $this->reader->next();
		$this->value = ($this->value != 0) ? 1 : 0;
	}

}
