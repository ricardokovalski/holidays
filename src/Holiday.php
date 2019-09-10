<?php

class Holiday
{
    public function getCollectionHolidays()
    {
        return [
            [
                'date' => '01/01/'.$this->getYear(),
                'name' => 'Ano novo',
            ],
            [
                'date' => '02/02/'.$this->getYear(),
                'name' => 'Navegantes',
            ],
            [
                'date' => date('d/m/', $this->getDateCarnival()).$this->getYear(),
                'name' => 'Carnaval',
            ],
            [
                'date' => date('d/m/', $this->getDateAshWednesday()).$this->getYear(),
                'name' => 'Quarta-feira de Cinzas',
            ],
            [
                'date' => date('d/m/', $this->getDateGoodFriday()).$this->getYear(),
                'name' => 'Sexta-feira Santa',
            ],
            [
                'date' => date('d/m/', $this->getDateChristmas()).$this->getYear(),
                'name' => 'Páscoa',
            ],
            [
                'date' => '21/04/'.$this->getYear(),
                'name' => 'Tiradentes',
            ],
            [
                'date' => '01/05/'.$this->getYear(),
                'name' => 'Dia do trabalhador',
            ],
            [
                'date' => date('d/m/', $this->getDateCorpusChrist()).$this->getYear(),
                'name' => 'Corpus Christi',
            ],
            [
                'date' => '07/09/'.$this->getYear(),
                'name' => 'Independência do Brasil',
            ],
            [
                'date' => '20/09/'.$this->getYear(),
                'name' => 'Revolução Farroupilha',
            ],
            [
                'date' => '12/10/'.$this->getYear(),
                'name' => 'Nossa Senhora Aparecida',
            ],
            [
                'date' => '02/11/'.$this->getYear(),
                'name' => 'Finados',
            ],
            [
                'date' => '15/11/'.$this->getYear(),
                'name' => 'Proclamação da República',
            ],
            [
                'date' => '25/12/'.$this->getYear(),
                'name' => 'Natal',
            ]
        ];
    }

    private function getYear()
    {
        return date('Y');
    }

    private function getNumberSecondsFromOneDay()
    {
        return 60*60*24;
    }

    private function getDateChristmas()
    {
        return easter_date();
    }

    private function getDateGoodFriday()
    {
        return $this->getDateChristmas() - (2 * $this->getNumberSecondsFromOneDay());
    }

    private function getDateCarnival()
    {
        return $this->getDateChristmas() - (47 * $this->getNumberSecondsFromOneDay());
    }

    private function getDateAshWednesday()
    {
        return $this->getDateChristmas() - (46 * $this->getNumberSecondsFromOneDay());
    }

    private function getDateCorpusChrist()
    {
        return $this->getDateChristmas() - (60 * $this->getNumberSecondsFromOneDay());
    }
}