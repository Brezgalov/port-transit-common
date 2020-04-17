<?php

namespace Brezgalov\PortTransitCommon\Utils;

trait ConvertArrayFieldsTrait
{
    public function convertArrayFields(array $data, array $fields)
    {
        foreach ($fields as $field) {
            if (array_key_exists($field, $data) && !is_array($data[$field])) {
                $data[$field] = explode(',', trim($data[$field]));
            }
        }

        return $data;
    }
}