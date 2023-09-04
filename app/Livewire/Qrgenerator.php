<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Documentcounter;
use App\Models\Transaction;

class Qrgenerator extends Component
{

    public $transaction_number_td;
    public $current_point_td;

    public function mount(){
        $get_current_transaction_number_td = Documentcounter::where('document_type','=', 'td',)
        ->where('active','=', 1)
        ->first();

        if($get_current_transaction_number_td){
            // $this->transaction_number_td = "TD-".$get_current_transaction_number_td->subcode."-".$get_current_transaction_number_td->current_point;
            $this->transaction_number_td = "Transaction Date: 09/01/2023 9:00am; \r\n Control Number: TD-23-2009;"."Receiving Officer: Sean Tolentino; \r\n Contact Details: 499-1141 / 599-900 Loc 541-545;";
            $this->current_point_td = $get_current_transaction_number_td->current_point;
        }

        $this->current_point = 1;
    }

    public function render()
    {
        return view('livewire.qrgenerator');
    }
}
