<?php

namespace Umeng\UmengPush\android;

use Umeng\UmengPush\AndroidNotification;

class AndroidGroupcast extends AndroidNotification
{

    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "groupcast";
        $this->data["filter"] = NULL;
    }
}