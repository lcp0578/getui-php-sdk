<?php
namespace Getui\Igetui;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-10
 * Time: 上午11:37
 */

class IGtAPNPayload
{
    var $APN_SOUND_SILENCE = "com.gexin.ios.silence";
    public static $PAYLOAD_MAX_BYTES = 2048;


    var $customMsg = array();

    var $badge = -1;
    var $sound = "default";
    var $contentAvailable = 0;
    var $category;
    var $alertMsg;
    var $multiMedias = array();

    public function get_payload()
    {
        try {

            $apsMap = array();

            if ($this->alertMsg != null) {
                $msg =  $this->alertMsg->get_alertMsg();
                if($msg != null)
                {
                    $apsMap["alert"] = $msg;
                }
            }

            if ($this->badge >= 0) {
                $apsMap["badge"] = $this->badge;
            }
            if($this -> sound == null || $this->sound == '' )
            {
                $apsMap["sound"] = 'default';
            }elseif($this->sound != $this->APN_SOUND_SILENCE)
            {
                $apsMap["sound"] = $this->sound;
            }

            if (sizeof($apsMap) == 0) {
                throw new \Exception("format error");
            }
            if ($this->contentAvailable > 0) {
                $apsMap["content-available"] = $this->contentAvailable;
            }
            if ($this->category != null && $this->category != "") {
                $apsMap["category"] = $this->category;
            }

            $map = array();
            if(count($this->customMsg) > 0){
                foreach ($this->customMsg as $key => $value) {
                    $map[$key] = $value;
                }
            }
            $map["aps"] = $apsMap;

            if($this -> multiMedias != null && sizeof($this -> multiMedias) > 0) {
                $map["_grinfo_"] = $this->check_multiMedias();
            }
            return json_encode($map);
        } catch (\Exception $e) {
            throw new \Exception("create apn payload error", -1, $e);
        }
    }

    public function add_customMsg($key, $value)
    {
        if ($key != null && $key != "" && $value != null) {
            $this->customMsg[$key] = $value;
        }
    }

    function check_multiMedias()
    {
        if(sizeof($this -> multiMedias) > 3) {
            throw new \RuntimeException("MultiMedias size overlimit");
        }

        $needGeneRid = false;
        $rids = array();
        for($i = 0; $i < sizeof($this -> multiMedias); $i++) {
            $media = $this -> multiMedias[$i];
            if($media -> get_rid() == null) {
                $needGeneRid = true;
            } else {
                $rids[$media -> get_rid()] = 0;
            }

            if($media->get_type() == null || $media->get_url() == null) {
                throw new \RuntimeException("MultiMedia resType and resUrl can't be null");
            }
        }

        if(sizeof($rids) != sizeof($this -> multiMedias))  {
            $needGeneRid = true;
        }
        if($needGeneRid) {
            for ($i = 0; $i < sizeof($this->multiMedias); $i++) {
                $this->multiMedias[$i] -> set_rid("grid-" . $i);
            }
        }

        return $this -> multiMedias;
    }

    function add_multiMedia($media) {
        $this->multiMedias[] = $media;
        return $this;
    }

    function set_multiMedias($medias) {
        $this->multiMedias = $medias;
        return $this;
    }
}
