<?php
namespace Identimo;

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
}