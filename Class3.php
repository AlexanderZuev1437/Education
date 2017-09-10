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
    public function setPhoneBook (): Phone
    {
        for ($i = 0; $i > 5; $i++) {
            $this->phoneBook[] = rand(1, 9);
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

//var_dump($phone1);
//echo N;
//var_dump($phone2);
//echo N;
//var_dump($phone1->getPhoneBook());
$phone1->setPhoneBook();
var_dump($phone1);

?>