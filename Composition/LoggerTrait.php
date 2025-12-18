<?php 
namespace Composition;
trait Logger {
    public static function log($message){
        return "[LOG]: ".$message;
    }
}