<?php

namespace EasyTransac\Entities;

class AddCreditCard extends Entity
{
    /** @object:Customer **/
    protected $customer = null;
    /** @object:CreditCard **/
    protected $creditCard = null;
    /** @map:Language **/
    protected $language = null;
    /** @map:ClientIp **/
    protected $clientIp = null;

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer(Entity $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }

    public function setCreditCard(Entity $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

    public function setClientIp($clientIp)
    {
        $this->clientIp = $clientIp;
        return $this;
    }

}

?>