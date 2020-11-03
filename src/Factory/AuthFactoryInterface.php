<?php
namespace Identimo\Factory;

interface AuthFactoryInterface{
    function token(string $username,string $password);
    function tokenVerify(string $token);
    function tokenRefresh(string $token);
    function requestPasswordReset(string $username,string $redirectUrl);
    function setPassword(string $username,string $password,string $token);
}