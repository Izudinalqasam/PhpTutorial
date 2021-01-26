<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/26/21
 * Time: 8:56 AM
 */

class LoginRequest
{
    public ?string $username;
    public ?string $password;
}

class ValidationException extends Exception {

}

class ValidationUtil
{
    // this is manual if you are not using reflection
    static function validate(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("Username is null");
        } elseif (!isset($loginRequest->password)) {
            throw new ValidationException("Password is null");
        } elseif (trim($loginRequest->username) == "") {
            throw new Exception("Username is null");
        } elseif (trim($loginRequest->password) == "") {
            throw new Exception("Password is null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property){
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } elseif (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}


$request = new LoginRequest();
$request->username = null;
$request->password = null;

ValidationUtil::validateReflection($request);