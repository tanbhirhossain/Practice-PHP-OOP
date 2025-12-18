<?php 
namespace Interface_;

trait Logger {
    public static function log($message){
        return "[LOG]: ".$message;
    }
}