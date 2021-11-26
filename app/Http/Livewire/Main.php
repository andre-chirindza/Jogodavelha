<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $icon = [
        ['lni lni-frame-expand','lni lni-frame-expand','lni lni-frame-expand'],
        ['lni lni-frame-expand','lni lni-frame-expand','lni lni-frame-expand'],
        ['lni lni-frame-expand','lni lni-frame-expand','lni lni-frame-expand']
    ];
    public $status = [
        'success' => false,
        'status' => '',
        'player' => 1,
    ];
    # - status can be {0 = empty, 1= circle, 2= xis }
    public $board = [
        [0,0,0],
        [0,0,0],
        [0,0,0]
    ];
    public $player1 = true;
    public $player2 = false;

    public function state_change($index1, $index2)
    {
        if ($this->player1) {
            if(!$this->board[$index1][$index2] == 1){

                $this->icon[$index1][$index2] = "lni lni-close";
                $this->board[$index1][$index2] = 1;
                $result = $this->verify($this->board, 1);
                if ($result) {
                    $this->status = [
                        'success' => true,
                        'status' => 'Vencedor',
                        'player' => 1,
                    ];
                    $this->player1 = false;
                        $this->player2 = false;
                } else {
                    if($this->verity_existence($this->board)){
                        $this->status = [
                            'success' => true,
                            'status' => 'Empate',
                            'player' => '',
                        ];
                        $this->player1 = false;
                        $this->player2 = false;
                    }else{

                        $this->player1 = false;
                        $this->player2 = true;
                    }
                }
            }

        }
        elseif($this->player2){
            if (!$this->board[$index1][$index2] == 2) {
                # code...
                $this->icon[$index1][$index2] = "lni lni-calculator";
                $this->board[$index1][$index2] = 2;

                $result = $this->verify($this->board, 2);
                if ($result) {
                    $this->status = [
                        'success' => true,
                        'status' => 'Vencedor',
                        'player' => 2,
                    ];
                    # code...
                } else {
                    if($this->verity_existence($this->board)){
                        $this->status = [
                            'success' => true,
                            'status' => 'Empate',
                            'player' => 2,
                        ];
                    }else{

                        $this->player1 = true;
                        $this->player2 = false;
                    }
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.main');
    }

    function verify($matrizes, $current){
        switch ($current) {
            case $matrizes[0][2] == $current && $matrizes[1][1] == $current && $current == $matrizes[2][0]:
                return true;
                break;
            case $matrizes[0][0] == $current && $matrizes[1][1] == $current && $matrizes[2][2] == $current:
                return true;
                break;
            case $matrizes[0][0] == $current && $matrizes[0][1] == $current && $matrizes[0][2] == $current:
                return true;
                break;
            case $matrizes[1][0] == $current && $matrizes[1][1] == $current && $matrizes[1][2] == $current:
                return true;
                break;
            case $matrizes[2][0] == $current && $matrizes[2][1] == $current && $matrizes[2][2] == $current:
                return true;
                break;
            case $matrizes[0][0] == $current && $matrizes[1][0] == $current && $matrizes[2][0] == $current:
                return true;
                break;
            case $matrizes[0][1] == $current && $matrizes[1][1] == $current && $matrizes[2][1] == $current:
                return true;
                break;
            case $matrizes[0][2] == $current && $matrizes[1][1] == $current && $matrizes[2][2] == $current:
                return true;
                break;
            default:
                return false;
                break;
        }
    }

    function verity_existence($matrizes){
        $count = 0;
        foreach ($matrizes as $matriz) {
            foreach ($matriz as $value) {
                if ($value == 0) {
                    $count += 1;
                }
            }
        }
        if ($count==0) {
            return true;
        } else {
            return false;
            # code...
        }

    }
}
