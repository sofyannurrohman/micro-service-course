<?php

function getUser($userId){
    $url = env("SERVICE_USER_URL")."users/".$userId;
};