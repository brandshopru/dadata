<?php

namespace Brandshopru\Dadata;

use DateTime;

class ProfileClient extends ClientBase
{
    public function __construct($token, $secret)
    {
        parent::__construct(Settings::BASE_URL, $token, $secret);
    }

    public function getBalance()
    {
        $url = "profile/balance";
        $response = $this->get($url);
        return $response["balance"];
    }

    public function getDailyStats($date = null)
    {
        $url = "stat/daily";
        if (!$date) {
            $date = new DateTime();
        }
        $query = ["date" => $date->format("Y-m-d")];
        return $this->get($url, $query);
    }

    public function getVersions()
    {
        $url = "version";
        return $this->get($url);
    }
}
