<?php
namespace App\classes;
class User
{

    public function getAllUser(){
        return [
          0 => [
              'id' => 1,
              'name' => 'Joy',
              'email' => 'nobijoy1446@gmail.com',
              'password' => 'hudai'
          ],
          1 => [
                'id' => 2,
                'name' => 'Rafa khan',
                'email' => 'rafa6@gmail.com',
                'password' => 'h215214'
            ],

        ];
    }

}