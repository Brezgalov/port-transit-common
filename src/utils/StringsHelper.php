<?php

namespace brezgalov\common\utils;

class StringsHelper
{
    /**
     * Переводим кейс строки в кейс где первая буква каждого слова - заглавная
     * @param string $value
     * @return string
     */
    public static function setCaseLikeName($value){
        return mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
    }

    /**
     * Удаляем из строки все, кроме цифр
     * @param string $value
     * @return string
     */
    public static function clearPhoneNumber($value){
        return preg_replace('/[^0-9]/', '', $value);
    }

    /**
     * Генерируем пароль из цифр и букв разного кейса
     * @param int $count - количество символов
     * @return string
     */
    public static function generatePasswordStrong($count)
    {
        $arr = [
            'a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p', 'r', 's',
            't', 'u', 'v', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'R', 'S',
            'T', 'U', 'V', 'X', 'Y', 'Z',
            '1', '2', '3', '4', '5', '6',
            '7', '8', '9', '0'
        ];
        $pass = '';
        for ($i = 0; $i < $count; $i++) {
            $index = rand(0, count($arr) - 1);
            $pass .= $arr[$index];
        }
        return $pass;
    }

    /**
     * Переводим первую букву слова в верхний регистр
     * @param $string
     * @return string
     */
    public static function firstCharToUpperMb($string)
    {
        $strlen = mb_strlen($string);
        $firstChar = mb_substr($string, 0, 1);
        $then = mb_substr($string, 1, $strlen - 1);
        return mb_strtoupper($firstChar) . $then;
    }

    /**
     * применяем к строке маску. Например $phoneMask = [2, '(', 3, ')', 3, '-', 2, '-', 2];
     * @param $string
     * @param array $mask
     * @param array $dropChars
     * @param string $dropDigit
     * @return string
     */
    public static function putMask($string, array $mask)
    {
        $window = 0;
        $result = '';
        foreach ($mask as $rule) {
            if (is_integer($rule)) {
                $result .= mb_substr($string, $window, $rule);
                $window += $rule;
            } else {
                $result .= $rule;
            }
        }
        return $result;
    }

    /**
     * Выбираем правельную форму слова по числу
     * @param integer $number - число: 1, 2, 25
     * @param string $one - едичиная форма (1 слон)
     * @param string $two - хз какая форма (2 слона)
     * @param string $five - множ. форма (5 слонов)
     * @return string
     */
    public static function numberToWord($number, $one, $two, $five)
    {
        $titles = [$one, $two, $five];
        $cases = array(2, 0, 1, 1, 1, 2);
        return $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
    }
}