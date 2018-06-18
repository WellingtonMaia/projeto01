<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Balance extends Model
{
    //
    public $timestamps = false;


    public function deposit(float $value) : Array{
    	
    	DB::beginTransaction();

    	$total_before = ($this->amount == NULL) ? number_format(0,2,".","") : $this->amount;
    	//$id_user = auth()->user()->id;


    	$this->amount += number_format($value, 2,'.','');
    	$deposit = $this->save();

    	$historic = auth()->user()->historics()->create(
    		[
	    		'type' 			 => 'I',
	    		'amount'		 => $value,
	    		'total_before' 	 => $total_before, 
	    		'total_after' 	 => $this->amount,  
	    		'date' 			 => date('Ymd'),
    		]
    	);
    	
    	if ($deposit && $historic){
    		
    		DB::commit();

    		return [
    			'successo' => true,
    			'message' => 'Sucesso ao Recarregar!',
    		];
    	}
    	else{

    		DB::rollback();

    		return [
    			'successo' => false,
    			'message' => 'Falha ao Recarregar!',
    		];
    	}
    	
    }
   
}
