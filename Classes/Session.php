<?php

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function get($key)
    {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        return null;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function clear()
    {
        session_unset();
    }

    public function destroy()
    {
        session_destroy();
    }
}