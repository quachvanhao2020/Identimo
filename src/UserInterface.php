<?php
namespace Identimo;
use YPHP\Model\Media\Image;
use Identimo\Storage\PermissionStorage;
use Laminas\Permissions\Acl\Role\RoleInterface;
use Laminas\Permissions\Rbac\RoleInterface as RbacRoleInterface;

interface UserInterface{
    /**
     * @return string
     */
    function getUsername();
        /**
     * @return string
     */
    function getPassword();
            /**
     * @return string
     */
    function getEmail();
            /**
     * @return string
     */
    function getPhone();

                /**
     * @return Image
     */
    function getAvatar();

                /**
     * @return PermissionStorage
     */
    function getPermissions();

                    /**
     * @return RoleInterface
     */
    function getAclRole();

                    /**
     * @return RbacRoleInterface
     */
    function getRbacRole();
}