<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('getRomawi')) {
    function getRomawi($bln)
    {
        switch ($bln) {
            case 1:
                return "I";;
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        };
    }
}

if (!function_exists('getNomorSurat')) {
    function getNomorSurat($nomor, $kode)
    {
       return $nomor .'/'.$kode.'/'.getRomawi(date('n')).'/'.date('Y');
    }
}