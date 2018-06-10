<?php
namespace Eh\EhPhpunit;


class Newsletter
{
    /**
     * @param $email
     * @return bool|string
     */
    public function subscription($email) {
        /* Validation */
        if(!$this->validateEmail($email)) {
            return false;
        }

        // Database

        // User return
        return 'Welcome';

    }

    /**
     * @param $email
     * @return bool
     */
    protected function validateEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return false;
        }

        if(strpos($email, 'spam') !== false) {
            return false;
        }

        return true;
    }

}