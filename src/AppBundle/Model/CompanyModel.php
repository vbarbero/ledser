<?php
/**
 * Created by PhpStorm.
 * User: trading
 * Date: 8/02/18
 * Time: 1:46
 */

namespace AppBundle\Model;


class CompanyModel
{
    const PROPONENT = 1;
    const FREED = 2;
    const CLIENT = 3;
    const FINANTIAL = 4;
    const DRAWEE = 5;

    public static function getTypeAsChoice()
    {
        return
            [
                'PROPONENT' => self::PROPONENT,
                'NO CLIENT' => self::FREED,
                'CLIENT' => self::CLIENT,
                'FINANTIAL' => self::FINANTIAL,
                'DRAWEE' => self::DRAWEE,
            ];
    }

    public static function getType()
    {
        return
            [
                self::PROPONENT => 'PROPONENT',
                self::FREED =>'NO CLIENT',
                self::CLIENT => 'CLIENT',
                self::FINANTIAL => 'FINANTIAL',
                self::DRAWEE => 'DRAWEE',
            ];
    }

    public static function getRatingAsChoice()
    {
        return
            [
                'Study' => 'Study',
                'A' => 'A',
                'B' => 'B',
                'C' => 'C',
                'D' => 'D',
            ];
    }
}