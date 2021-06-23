<?php


class order
{
    private $name;
    private $lastname;
    private $tel;
    private $gov;
    private $city;
    private $str;
    private $payment;
    private $order;

    /**
     * order constructor.
     * @param $name
     * @param $lastname
     * @param $tel
     * @param $gov
     * @param $city
     * @param $str
     * @param $payment
     * @param $order
     */
    public function __construct($name, $lastname, $tel, $gov, $city, $str, $payment,$order)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->tel = $tel;
        $this->gov = $gov;
        $this->city = $city;
        $this->str = $str;
        $this->payment = $payment;
        $this->order=$order;
    }/**
 * @return mixed
 */
public function getOrder()
{
    return $this->order;
}/**
 * @param mixed $order
 */
public function setOrder($order)
{
    $this->order = $order;
}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getGov()
    {
        return $this->gov;
    }

    /**
     * @param mixed $gov
     */
    public function setGov($gov)
    {
        $this->gov = $gov;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * @param mixed $str
     */
    public function setStr($str)
    {
        $this->str = $str;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    public function __toString()
    {
        return $this->name;
    }


}