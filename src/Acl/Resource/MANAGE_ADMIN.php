<?php
namespace Identimo\Acl\Resource;

use Laminas\Permissions\Acl\Resource\GenericResource;

class MANAGE_ADMIN extends GenericResource{
    const __name = "MANAGE_ADMIN";
    /**
     * Sets the Resource identifier
     *
     */
    public function __construct()
    {
        $this->resourceId = self::__name;
    }
}