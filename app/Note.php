<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['MFI','successIndicator','actualaccomplishments','distribution','Q1','E2','T3','A4','Ave','Remarks','ipcr_id'];


    public function ipcr()
    {
    	return $this->belongsTo(ipcr::class);
    }
}
