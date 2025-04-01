<?php

namespace UPJV;

class MesDates
{
     @return string La date de demain en format JSON .
    public function demain(): string
    {
        $dateDemain = new \DateTime('tomorrow');
        return json_encode(['demain' => $dateDemain->format('d-m-Y')]);
    }
}
