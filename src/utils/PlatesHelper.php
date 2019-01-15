<?php

namespace brezgalov\common\utils;

class PlatesHelper
{
    /**
     * Конвертирует символы из номера в англ для базы
     * @param string $plate
     * @return string
     */
    public static function toBase($plate)
    {
        $plate = mb_strtoupper($plate);
        $plate = str_replace(' ', '', $plate);
        $plate = str_replace('А', 'A', $plate);
        $plate = str_replace('В', 'B', $plate);
        $plate = str_replace('Е', 'E', $plate);
        $plate = str_replace('К', 'K', $plate);
        $plate = str_replace('М', 'M', $plate);
        $plate = str_replace('Н', 'H', $plate);
        $plate = str_replace('О', 'O', $plate);
        $plate = str_replace('Р', 'P', $plate);
        $plate = str_replace('С', 'C', $plate);
        $plate = str_replace('Т', 'T', $plate);
        $plate = str_replace('У', 'Y', $plate);
        $plate = str_replace('Х', 'X', $plate);

        $plate = str_replace('а', 'A', $plate);
        $plate = str_replace('в', 'B', $plate);
        $plate = str_replace('е', 'E', $plate);
        $plate = str_replace('к', 'K', $plate);
        $plate = str_replace('м', 'M', $plate);
        $plate = str_replace('н', 'H', $plate);
        $plate = str_replace('о', 'O', $plate);
        $plate = str_replace('р', 'P', $plate);
        $plate = str_replace('с', 'C', $plate);
        $plate = str_replace('т', 'T', $plate);
        $plate = str_replace('у', 'Y', $plate);
        $plate = str_replace('х', 'X', $plate);

        return $plate;
    }

    /**
     * Конвертирует символы номера из англ в рус
     * @param string $plate
     * @return string
     */
    public static function fromBase($plate)
    {
        $plate = str_replace('A', 'а', $plate);
        $plate = str_replace('B', 'в', $plate);
        $plate = str_replace('E', 'е', $plate);
        $plate = str_replace('K', 'к', $plate);
        $plate = str_replace('M', 'м', $plate);
        $plate = str_replace('H', 'н', $plate);
        $plate = str_replace('O', 'о', $plate);
        $plate = str_replace('P', 'р', $plate);
        $plate = str_replace('C', 'с', $plate);
        $plate = str_replace('T', 'т', $plate);
        $plate = str_replace('Y', 'у', $plate);
        $plate = str_replace('X', 'х', $plate);

        return $plate;
    }
}