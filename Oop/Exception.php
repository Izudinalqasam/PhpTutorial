<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/26/21
 * Time: 8:14 AM
 */

// if you want to make your own exception, you can extend Exception class instead of implementing the interface throwable
// the class already handle the rest of boilerplate code to make own exception

class LoginRequest
{
    public string $username;
    public string $password;
}

class ValidationException extends Exception
{

}

function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationException("Username is null");
    } else if (!isset($loginRequest->password)) {
        throw new ValidationException("Password is null");
    } else if (trim($loginRequest->username) == "") {
        throw new Exception("Username is empty");
    } else if (trim($loginRequest->password) == "") {
        throw new Exception("Password is empty");
    }
}

$loginRequest = new LoginRequest();
$loginRequest->username = "  ";
$loginRequest->password = "  ";

// catch the error to prevent our application stopped when error happen
try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Validation Error : {$exception->getMessage()}". PHP_EOL;
} catch (Exception | Throwable $exception) { // you can specify multiple type to be handled by one like below
    echo "Exception Error : {$exception->getMessage()}". PHP_EOL;

    // this will give you detail about exception
    echo "Trace for get detail error : ". PHP_EOL. $exception->getTraceAsString();

    var_dump($exception->getTrace());

} finally {
    echo "Error or not, this statement will be executed". PHP_EOL;
}

echo "VALID". PHP_EOL;