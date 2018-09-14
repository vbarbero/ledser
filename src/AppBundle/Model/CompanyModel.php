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
    const FACTURACION_LESS_1 = 1;
    const FACTURACION_1_5 = 2;
    const FACTURACION_5_10 = 3;
    const FACTURACION_10_20 = 4;
    const FACTURACION_PLUS_20 = 5;
    const CLIENTE_PUBLICO = 1;
    const CLIENTE_PRIVADOS = 2;
    const CLIENTE_AMBOS = 3;
    const SI = 1;
    const NO = 0;
    const PLAZO_0 = 1;
    const PLAZO_30 = 2;
    const PLAZO_60 = 3;
    const PLAZO_90 = 4;
    const PLAZO_120 = 5;
    const PLAZO_150 = 6;
    const PLAZO_180 = 7;
    const PLAZO_210 = 8;
    const MEDIO_COBRO_TRANSFER = 1;
    const MEDIO_COBRO_PAGARES = 2;
    const MEDIO_COBRO_CONFIRMING = 3;
    const MEDIO_COBRO_CONTADO = 4;
    const MEDIO_COBRO_OTROS = 5;


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

    public static function getFacturacionAsChoice()
    {
        return
            [
                self::FACTURACION_LESS_1 => '<1',
                self::FACTURACION_1_5 => '1-5',
                self::FACTURACION_5_10 => '5-10',
                self::FACTURACION_10_20 => '10-20',
                self::FACTURACION_PLUS_20 => '20>',
            ];
    }

    public static function getClienteAsChoice()
    {
        return
            [
                self::CLIENTE_PUBLICO => 'Publico',
                self::CLIENTE_PRIVADOS => 'Privado',
                self::CLIENTE_AMBOS => 'Ambos',
            ];
    }

    public static function getSiNoAsChoice()
    {
        return
            [
                self::SI => 'Si',
                self::NO => 'NO',
            ];
    }

    public static function getPlazoAsChoice()
    {
        return
            [
                self::PLAZO_0 => '0',
                self::PLAZO_30 => '30',
                self::PLAZO_60 => '60',
                self::PLAZO_90 => '90',
                self::PLAZO_120 => '120',
                self::PLAZO_150 => '150',
                self::PLAZO_180 => '180',
                self::PLAZO_210 => '210',
            ];
    }

    public static function getMEdioCobroAsChoice()
    {
        return
            [
                self::MEDIO_COBRO_TRANSFER => 'Transferencia',
                self::MEDIO_COBRO_PAGARES => 'pagares',
                self::MEDIO_COBRO_CONFIRMING => 'confirming',
                self::MEDIO_COBRO_CONTADO => 'contado',
                self::MEDIO_COBRO_OTROS => 'otros',
            ];
    }
}