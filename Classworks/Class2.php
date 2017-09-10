<?php
define('N', "</br>");
echo "Classwork" . N;

class User
{
    const  ROLE_ADMIN = 0;
    private $username;
    private $email;
    private $password;
    private $registrationDate;
    private $role;
    private $age;
    public function __construct($email, $username, $role = self::ROLE_ADMIN/*User::ROLE_ADMIN*/)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = '12345678';
        $this->registrationDate = new \DateTime();
        $this->role = User::ROLE_ADMIN;
    }

    /**
     * @param mixed $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param mixed $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}


$user = new User('lol@gmail.com', 'user1');

$user->setUserName('user2');
// Esli est  @fluent setter@
$user
    ->setUsername('user2')
    ->setEmail('admin');
var_dump($user->getUsername());
//Mojem sozdat escho tak object
(new User('lol@gmail.com', 'user1'))
    ->setUsername('user2')
    ->setEmail('admin');



?>