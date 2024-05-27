<?php

namespace App\Services\Entrant;

use App\Models\EntraintSubject;

class Service
{
    public function updateOcenka($data, $entrant)
    {               
        foreach ($data['ocenkas'] as $key => $value){
            
            if (is_null($value)){
                $record = EntraintSubject::where('entrant_id', $entrant->user_id)->
                            where('subject_id', $key)
                            ->delete();
            }else{
                $arr['entrant_id'] = $entrant->user_id;
                $arr['subject_id'] = $key;
                $arr['ocenka'] = $value;
                EntraintSubject::updateOrCreate(['entrant_id' => $arr['entrant_id'], 'subject_id' => $arr['subject_id']],$arr);
            }
        }
    }

    public function getRating($entrant){
        $attestat = EntraintSubject::where('entrant_id', $entrant->user_id)->get();
        $i = 0;
        $sum = 0;
        foreach($attestat as $item){
            if (!(is_null($item['ocenka']))){
                $sum += $item['ocenka'];
                $i ++;
            }
        }
        if ($i==0){
            $sum = 0;
        }else{
            $sum = $sum / $i; 
        }
        return $sum;
    }
}