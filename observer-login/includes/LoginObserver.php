<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 26-Apr-17
 * Time: 8:12 AM
 */
abstract class LoginObserver implements \SplObserver
{
    private $login;

    /**
     * LoginObserver constructor.
     * @param $login
     */
    public function __construct($login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    public function update(\SplSubject $subject)
    {
        if ($subject === $this->login) {
            $this->doUpdate($subject);
        }
    }

    abstract public function doUpdate(Login $login);

}