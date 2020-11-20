<?php
namespace Identimo\Acl\Resource;
use Laminas\Permissions\Acl\Resource\GenericResource;

class MANAGE_USER extends GenericResource{
    const __name = "MANAGE_USER";
    /**
     * Sets the Resource identifier
     *
     */
    public function __construct()
    {
        $this->resourceId = self::__name;
    }
}