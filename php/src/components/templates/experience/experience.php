<?php
if(!isset($type)) $type = 'edu';

switch($type){
    case 'prof': 
        $experience = [
            [
                'name' => 'allix gmbh',
                'start' => '2018 August',
                'end' => '',
                'durration' => 5,
                'year' => ''
            ],
            [
                'name' => 'allix gmbh',
                'start' => '',
                'end' => '',
                'durration' => 12,
                'year' => '2019'
            ],
            [
                'name' => 'allix gmbh',
                'start' => '',
                'end' => '',
                'durration' => 12,
                'year' => '2020'
            ],
            [
                'name' => 'allix gmbh',
                'start' => '',
                'end' => '',
                'durration' => 12,
                'year' => '2021'
            ],
            [
                'name' => 'allix gmbh',
                'start' => '',
                'end' => '2022 July',
                'durration' => 7,
                'year' => ''
            ],
            [
                'name' => 'inware ag',
                'start' => '2022 August',
                'end' => '',
                'durration' => 5,
                'year' => ''
            ],
        ];
        break;
    case 'edu':
        $experience = [
            [
                'name' => 'BBB Baden',
                'start' => '2018 August',
                'end' => '',
                'durration' => 5,
                'year' => ''
            ],
            [
                'name' => 'Informatiker EFZ <br> Berufsmatura',
                'start' => '',
                'end' => '',
                'durration' => 12,
                'year' => '2019'
            ],
            [
                'name' => '',
                'start' => '',
                'end' => '',
                'durration' => 12,
                'year' => '2020'
            ],
            [
                'name' => '',
                'start' => '',
                'end' => '',
                'durration' => 12,
                'year' => '2021'
            ],
            [
                'name' => '',
                'start' => '',
                'end' => '2022 July',
                'durration' => 7,
                'year' => ''
            ],
            [
                'name' => 'Passarelle',
                'start' => '2022 August',
                'end' => '',
                'durration' => 5,
                'year' => ''
            ]
        ];
        break;
}



//get the link to the foother
$css = '/components/templates/experience/experience.css';
include 'experience.phtml';