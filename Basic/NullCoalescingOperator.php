<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/22/21
 * Time: 8:38 AM
 */

$data = [
    "action" => "create"
];

$action1 = $data["action"] ?? "nothing";
$action2 = $data["review"] ?? "failed";

echo "The action1 is $action1
The action2 is $action2";