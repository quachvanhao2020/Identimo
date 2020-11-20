<?php
namespace Identimo;
use YPHP\Model\Media\Image;
use Laminas\Permissions\Acl\Role\RoleInterface;
use Laminas\Permissions\Rbac\RoleInterface as RbacRoleInterface;
use Identimo\Permission;

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
     * @return Permission
     */
    function getPermission();

                    /**
     * @return RoleInterface
     */
    function getAclRole();

                    /**
     * @return RbacRoleInterface
     */
    function getRbacRole();
}