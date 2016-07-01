<?php
function __autoload($name)
{
    include_once("inc/$name.php");
}
include_once ('/config.php');
$action = 'Action_';
$controller = '';

$action .= isset($_GET['a']) ? $_GET['a'] : 'Login';
if (isset($_GET['c']))
    $controller = $_GET['c'];

switch ($controller)
{
    case 'article':{

        $c = new C_Article();
        break;

    }
    default: {
    	
        $c = new C_Auth();

    }
}
// $action possible meanings : Action_Login; Action_Show_all; Action_Add;
//    Action_Look; Action_Edit; Action_Delete; Action_Add_comment.
$c->Request($action);