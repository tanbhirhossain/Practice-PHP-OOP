<?php 

namespace SPattern;
interface Payable{
    public function processPayment($amount);
}