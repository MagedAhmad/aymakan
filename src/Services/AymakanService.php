<?php

namespace MagedAhmad\Aymakan\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AymakanService
{
    public function validateShipmentData($data)
    {
        $validator = Validator::make($data, [
            "requested_by" => 'required',
            "declared_value" => 'required',
            'delivery_name' => 'required',
            'delivery_city' => 'required',
            'delivery_address' => 'required',
            'delivery_country' => 'required',
            'delivery_phone' => 'required',
            'collection_name' => 'required',
            'collection_city' => 'required',
            'collection_address' => 'required',
            'collection_country' => 'required',
            'collection_phone' => 'required',
            'pieces' => 'required',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}