<?php
use Identimo\Acl\Acl;

function PermissionGuard($object,$method,$role = null){
    $rc = new \ReflectionClass($object);
    $method = $rc->getMethod($method);
    $annotations = parseAnnotations($method);
    $allow = false;
    $acl = Acl::getInstance();
    if(isset($annotations["permission"])){
        $_permissions = $annotations["permission"][0];
        $permissions = explode("|",$_permissions);
        foreach ($permissions as $key => $permission) {
            $allow = $acl->isAllowed($role,$permission);
            //var_dump($permission);var_dump($allow);var_dump($method);
            if(!$allow){
                return $_permissions;
            };
        }
    }
    return true;
}
function PermissionGuardArray(array &$array,$role = null,bool $clear = false){
    $acl = Acl::getInstance();
    $allow = true;
    $start = false;
    $permissions = [];
    foreach ($array as $key => &$value) {
        if($key == PERMISSION_CAPTURE_START){
            $start = true;
            $permissions = $value;
            unset($array[$key]);
        }
        if($key == PERMISSION_CAPTURE_END){
            $start = false;
            $allow = true;
            unset($array[$key]);
        }
        if($start){
            foreach ($permissions as $permission) {
                if(!$acl->isAllowed($role,$permission)){
                    $allow = false;
                    break;
                };
            }
        }
        if(!$allow){
            unset($array[$key]);
            continue;
        }
        if(is_array($value)){
            \PermissionGuardArray($value,$role);
        }
    }
}
if(\function_exists("parseAnnotations")){
    /**
    * Copied from PHPUnit 3.7.29, Util/Test.php
    *
    * @param string $docblock Full method docblock
    *
    * @return array
    */
    function parseAnnotations($docblock)
    {
    $annotations = array();
    // Strip away the docblock header and footer
    // to ease parsing of one line annotations
    $docblock = substr($docblock, 3, -2);

    $re = '/@(?P<name>[A-Za-z_-]+)(?:[ \t]+(?P<value>.*?))?[ \t]*\r?$/m';
    if (preg_match_all($re, $docblock, $matches)) {
        $numMatches = count($matches[0]);

        for ($i = 0; $i < $numMatches; ++$i) {
            $annotations[$matches['name'][$i]][] = $matches['value'][$i];
        }
    }

    return $annotations;
    }
}
