<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testLogin()
    {   
        $login = bin2hex(random_bytes(10));
        $_POST['login'] = $login;

        ob_start();
        include '../templates/logged.php';
        $wynik = ob_get_clean();
        $this->assertEquals("Witaj, $login", $wynik);

        ob_start();
        $_SERVER['REQUEST_URI'] = '../templates/register.php';
        include '../templates/register.php';
        $wynik = ob_get_clean();
        $this->assertEquals("placeholder: rejestracja", $wynik);

        ob_start();
        $_SERVER['REQUEST_URI'] = '../templates/passwordReset.php';
        include '../templates/passwordReset.php';
        $wynik = ob_get_clean();
        $this->assertEquals("placeholder: reset", $wynik);
    }
}
?>