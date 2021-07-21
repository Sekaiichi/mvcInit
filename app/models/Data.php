<?php

namespace app\models;

class Data
{

    public function get() :array
    {
        return [
            [
                'id' => 1,
                'value' => 'example-1'
            ],
            [
                'id' => 2,
                'value' => 'example-2'
            ],
            [
                'id' => 3,
                'value' => 'example-3'
            ],
            [
                'id' => 4,
                'value' => 'example-4'
            ],
            [
                'id' => 5,
                'value' => 'example-5'
            ]
        ];
    }

}
