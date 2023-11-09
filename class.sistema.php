<?php
include_once"class.pessoa.php";
include_once"class.dentista.php";
include_once"class.usuario.php";
Class Sistema{
      
       private static $login = [];
   
       
       public static function getInstance(): Sistema
       {
           $cls = static::class;
           if (!isset(self::$login[$cls])) {
               self::$login[$cls] = new static();
           }
   
           return self::$login[$cls];
       }
      }