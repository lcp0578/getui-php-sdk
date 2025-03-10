<?php
namespace Getui\Igetui\Template;

use Getui\Igetui\Template\IGtBaseTemplate;
use Getui\Igetui\ActionChain;
use Getui\Igetui\ActionChain_Type;
use Getui\Igetui\AppStartUp;
use Getui\Igetui\NotifyInfo;

class IGtTransmissionTemplate extends IGtBaseTemplate {

	var $transmissionType;
	var $transmissionContent;

	public function  getActionChain() {

		$actionChains = array();


		// 设置actionChain
		$actionChain1 = new ActionChain();
		$actionChain1->set_actionId(1);
		$actionChain1->set_type(ActionChain_Type::refer);
		$actionChain1->set_next(10030);

		//appStartUp
		$appStartUp = new AppStartUp();
 		$appStartUp->set_android("");
		$appStartUp->set_symbia("");
		$appStartUp->set_ios("");

		//启动app
		$actionChain2 = new ActionChain();
		$actionChain2->set_actionId(10030);
		$actionChain2->set_type(ActionChain_Type::startapp);
		$actionChain2->set_appid("");
		$actionChain2->set_autostart($this->transmissionType == '1'? true : false);
		$actionChain2->set_appstartupid($appStartUp);
		$actionChain2->set_failedAction(100);
		$actionChain2->set_next(100);

		//结束
		$actionChain3 = new ActionChain();
		$actionChain3->set_actionId(100);
		$actionChain3->set_type(ActionChain_Type::eoa);


		array_push($actionChains, $actionChain1,$actionChain2,$actionChain3);

		return $actionChains;
	}

	function  get_transmissionContent() {
		return $this->transmissionContent;
	}

	function  get_pushType() {
		return 'TransmissionMsg';
	}


	function  set_transmissionType($transmissionType) {
		$this->transmissionType = $transmissionType;
	}

	function  set_transmissionContent($transmissionContent) {
		$this->transmissionContent = $transmissionContent;
	}

    function set3rdNotifyInfo($notify) {
        if ($notify->get_title() == null || $notify -> get_content() == null) {
            throw new \Exception("notify title or content cannot be null");
        }

        $notifyInfo = new NotifyInfo();
        $notifyInfo -> set_title($notify -> get_title());
        $notifyInfo -> set_content($notify -> get_content());
        $notifyInfo -> set_payload($notify -> get_payload());

        $pushInfo = $this-> get_pushInfo();
        $pushInfo -> set_notifyInfo($notifyInfo);
        $pushInfo -> set_validNotify(true);
    }
}
