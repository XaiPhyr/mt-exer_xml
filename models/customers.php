<?php
include("query-getter.php");

class CustomerModel extends QueryGetter
{
    function get_customer()
    {
        $get = "SELECT * FROM 
        customer_header AS ch,
        customer_address AS ca,
        customer_contacts AS cc WHERE
        ch.Id = ca.customer_id AND ch.Id = cc.customer_id";

        return $this->ListRetrieveQuery($get);
    }
}

$CustomerModel = new CustomerModel;
