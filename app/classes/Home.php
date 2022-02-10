<?php
namespace App\classes;
class Home
{
    protected $number;
    protected $i, $c, $result;

    public function __construct($post=null)
    {
        $this->number = $post['given_number'];
    }

    public function index(){
        header('Location: action.php?pages=home');
    }

    public function primeNumber(){
        $this->c=0;
        for ($this->i=2; $this->i <= $this->number/2; $this->i++){
        if ($this->number % $this->i == 0){
            $this->c = 1;
            break;
        }
        else{
            $this->c = 0;
        }
        }
        if ($this->c==0){
            $this->result = $this->number. ' is prime';
        }
        else{
             $this->result= $this->number. ' is not prime';
        }
        return $this->result;
    }


}