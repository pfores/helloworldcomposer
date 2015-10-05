<?php


class factoria
{
    /**
     * @var string
     */
    public $name = "";
    /**
     * @var string
     */
    public $name2 = "";
    /**
     * @var string
     */
    public $sn1 = "";
    /**
     * @var string
     */
    public $sn2 = "";

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * factoria constructor.
     * @param string $name2
     * @param string $name
     * @param string $sn1
     * @param string $sn2
     */
    public function __construct($name2, $name, $sn1, $sn2)
    {
        $this->name2 = $name2;
        $this->name = $name;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
    }


}