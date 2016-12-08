<?php
    /**
     * Copyright (C) 2016  Quatro Design by Jakub Socha
     *
     *
     *
     * @file       : TokenGenerator.php
     * @author     : Jakub Socha
     * @copyright  : (c) 2009-2016 Quatro Design
     * @link       : http://quatrodesign.pl
     * @date       : 08.12.16
     * @version    : 1.0.0
     */
    
    namespace Jsocha\TokenGenerator;
    
    class TokenGenerator
    {
        static $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        
        public static function make($length)
        {
            $token = '';
            $alphabetLength = strlen(self::$alphabet) - 1;
            for ($i = 0; $i < $length; $i++) {
                $randomKey = self::getRandomInteger(0, $alphabetLength);
                $token .= self::$alphabet[$randomKey];
            }
            
            return $token;
        }
        
        protected static function getRandomInteger($min, $max)
        {
            $range = ($max - $min);
            
            if ($range < 0) {
                return $min;
            }
            $log = log($range, 2);
            
            $bytes = (int) ($log / 8) + 1;
            
            $bits = (int) $log + 1;
            
            $filter = (int) (1 << $bits) - 1;
            
            do {
                $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
                $rnd = $rnd & $filter;
                
            } while ($rnd >= $range);
            
            return ($min + $rnd);
        }
    }