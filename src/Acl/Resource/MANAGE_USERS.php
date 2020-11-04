<?php
namespace Identimo\Acl\Resource;

use Laminas\Permissions\Acl\Resource\GenericResource;

class MANAGE_USERS extends GenericResource{
    const __name = "MANAGE_USERS";
    /**
     * Sets the Resource identifier
     *
     */
    public function __construct()
    {
        $this->resourceId = self::__name;
    }
}