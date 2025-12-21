<?php 
namespace SPattern;
trait Logger {
    public static function log($message){
        return "[LOG]: ".$message;
    }
}