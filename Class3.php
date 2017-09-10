<?php
define('N', "</br>");
echo "Classwork" . N;

class Phone
{
    private $tradingMark;
    private $model;
    private $cpu;
    private $phoneBook;

    public function __construct($tradingMark, $model, $cpu)
    {
        $this->tradingMark = $tradingMark;
        $this->model = $model;
        $this->cpu = $cpu;
        $this->phoneBook = [];

    }

    /**
     * @param array $phoneBook
     * @return Phone
     */
    public function setPhoneBook(): Phone
    {
        for ($i = 0; $i < 5; $i++) {
            $name=chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90));
            $this->phoneBook[$name] = rand(0000000, 999999999);
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getPhoneBook(): array
    {
        return $this->phoneBook;
    }


}

$phone1 = new Phone('Nokia', '1100', '1');
$phone2 = new Phone('Apple', 'Phone 3gs', '4');


$phone1->setPhoneBook();
echo '<pre>',print_r($phone1),'</pre>';
?>