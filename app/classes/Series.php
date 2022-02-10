<?php
namespace App\classes;
class Series
{
    protected $startNumber;
    protected $endNumber;
    protected $result;
    protected $sum=0 , $i;

    public function __construct($post=null)
    {
        $this->startNumber = $post ['starting_number'];
        $this->endNumber = $post ['ending_number'];

    }
    public function sumOfNumber(){
        if ($this->startNumber && $this->endNumber){
            for ($this->i = $this->startNumber; $this->i <= $this->endNumber; $this->i++){
                $this->result .=  $this->i.'+';
                $this->sum += $this->i;
            }
            return [
                'result'=> rtrim($this->result, '+') . '=' .$this->sum,
                'starting_number' => $this->startNumber,
                'ending_number' => $this->endNumber
            ];
        }
        return '';
    }

}