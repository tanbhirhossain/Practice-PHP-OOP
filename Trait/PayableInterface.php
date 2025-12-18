<?php 

namespace Interface_;

interface Payable{
    public function processPayment($amount);
}