<?php

class RakutenRws_Api_Definition_DummyAppRakutenApi2 extends RakutenRws_Api_AppRakutenApi
{
    protected
        $versionMap = array(
            '1989-01-08' => '19890108'
        ),
        $isRequiredAccessToken = false;

    public function getService()
    {
        return 'DummyService';
    }

    public function getOperation()
    {
        return 'DummyOperation2';
    }
}
