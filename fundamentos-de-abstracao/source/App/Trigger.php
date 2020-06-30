<?php


namespace Source\App;


class Trigger
{
private const TRIGGER = "alert";

public const ACCEPT = "alert-success";
public const WARNING = "alert-warning";
public const ERROR = "alert-danger";

private static $message;
private static $erroType;
private static $error;

    public static function show($message, $erroType = null)
    {
        self::setError($message,$erroType);
        echo self::$error;
    }
    public static function push($message,$erroType = null)
    {
        self::setError($message,$erroType);
        return self::$error;
    }
    private static function setError($message, $erroType)
    {
         $reflection = new \ReflectionClass(__CLASS__);
         $errorTypes = $reflection->getConstants();

         self::$message = $message;

         self::$erroType = (!empty($erroType) || in_array($erroType,$errorTypes) ? " {$erroType}" : "");
    self::$error = "<p class='".self::TRIGGER.self::$erroType."'>".self::$message."</p>";
    }

}