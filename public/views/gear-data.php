<?php

declare(strict_types=1);

return [
    'metrics' => [
        ['label' => 'COMP BENCHES', 'value' => '8,420', 'note' => 'Ghost, ER, TSS, Eleiko', 'icon' => 'gear-bench'],
        ['label' => 'RACKS & MONOLIFTS', 'value' => '4,150', 'note' => 'IPF specs & hybrid units', 'icon' => 'gear-rack'],
        ['label' => 'SPECIALTY BARS', 'value' => '1,290', 'note' => 'SSB, Buffalo, Kabuki', 'icon' => 'gear-bars'],
        ['label' => 'CALIBRATED STEEL', 'value' => '1.9M', 'unit' => 'KG', 'note' => '+10g Ivanko & Rogue KG', 'icon' => 'gear-weight'],
        ['label' => 'AUDIT ACCURACY', 'value' => '99.4%', 'note' => '89,400+ peer reviews', 'icon' => 'gear-shield', 'accuracy' => true],
    ],
    'knurl' => [
        ['brand' => 'ELEIKO IPF', 'weight' => '20 KG', 'name' => 'Comp Bar', 'profile' => 'Volcano', 'shaft' => '29.0 mm', 'aggression' => 4, 'blue' => false],
        ['brand' => "BUDDY CAPP'S", 'weight' => '20 KG', 'name' => 'Texas Power', 'profile' => 'Mountain', 'shaft' => '28.5 mm', 'aggression' => 5, 'blue' => true],
    ],
    'manifests' => [
        [
            'image' => '/assets/img/metro-iron.jpg',
            'imageClass' => '',
            'score' => '99.8%',
            'name' => 'Metropolitan Iron Club',
            'location' => 'Austin, TX',
            'area' => '760 m²',
            'groups' => [
                ['name' => 'RACKS & BENCHES', 'summary' => '18 COMBOS ON DECK', 'pairs' => [
                    ['8× Eleiko IPF Combos', '6× Ghost Strong Benches'],
                    ['Roller J-cups & lever arms', '37cm Competition Fat Pads'],
                ]],
                ['name' => 'BARBELL ARMORY', 'summary' => '28 SPEC BARS', 'pairs' => [
                    ['12× Texas Power Bars (29mm)', 'AGGRESSIVE', 'text-lime'],
                    ['6× Kabuki Squat Bars (32mm)', 'ZERO FLEX', 'text-blue'],
                    ['4× Rogue Ohio Deadlift (27mm)', 'HIGH WHIP', 'text-orange'],
                ]],
            ],
            'tags' => ['IVANKO KG SPEC', 'ELEIKO IPF STEEL', 'KABUKI SPECIALTY'],
            'audited' => '2D AGO',
        ],
        [
            'image' => '/assets/img/iron-haven.jpg',
            'imageClass' => 'manifest-image-apex',
            'score' => '99.2%',
            'name' => 'Apex Strength & Conditioning',
            'location' => 'Columbus, OH',
            'area' => '1,060 m²',
            'groups' => [
                ['name' => 'RACKS & BENCHES', 'summary' => '14 CAGES & COMBOS', 'pairs' => [
                    ['10× 3×3 11-Gauge Cages', '8× TSS Comp Benches'],
                    ['Band pegs & spotter straps', 'Grip vinyl & comp footing'],
                ]],
                ['name' => 'BARBELL ARMORY', 'summary' => '32 SPEC BARS', 'pairs' => [
                    ['16× Rogue Ohio Power (Bare Steel)', 'MAX GRIP', 'text-lime'],
                    ['8× Texas Deadlift Bars (27mm)', 'DEEP KNURL', 'text-blue'],
                    ['4× Kabuki Cadillac Bench Bars', 'MULTI-GRIP', 'text-orange'],
                ]],
            ],
            'tags' => ['ROGUE CALIBRATED', 'TEXAS POWER BARS', 'BAND PEGS VERIFIED'],
            'audited' => '5D AGO',
        ],
        [
            'image' => '/assets/img/black-iron.jpg',
            'imageClass' => 'manifest-image-vanguard',
            'score' => '100%',
            'name' => 'Vanguard Barbell Co.',
            'location' => 'East Austin Yards, TX',
            'area' => '640 m²',
            'groups' => [
                ['name' => 'RACKS & BENCHES', 'summary' => '4 MONOS • 6 COMBOS', 'pairs' => [
                    ['4× Custom Monolifts', '8× Fat Pad Comp Benches'],
                    ['Hydraulic jack assist arms', 'IPF spec Thompson pads'],
                ]],
                ['name' => 'BARBELL ARMORY', 'summary' => '25 SPEC BARS', 'pairs' => [
                    ['8× Kabuki Transformer SSB', '24 POSITIONS', 'text-lime'],
                    ['6× Texas Squat Bars (32mm)', 'SHARP KNURL', 'text-blue'],
                    ['5× Okie Deadlift Bars', 'LEGENDARY WHIP', 'text-orange'],
                ]],
            ],
            'tags' => ['VINTAGE MILLED CAST', 'FORZA BENCHES', 'STRONGMAN IMPLEMENTS'],
            'audited' => '1W AGO',
        ],
    ],
    'hardware' => [
        ['icon' => 'gear-bars', 'symbol' => 'symbol-lime', 'name' => 'Texas Power Bar', 'detail' => '28.5mm Diameter • 20KG Barbell', 'manufacturer' => ['Texas Power Bars /', 'Buddy Capps'], 'specification' => ['190,000 PSI Tensile • Raw Steel •', 'Medium-Wide Center Knurl'], 'rating' => 'VOLCANO', 'ratingDetail' => '9.2 / 10', 'ratingClass' => 'text-lime', 'note' => ['Aggressive bite'], 'facilities' => '1,420'],
        ['icon' => 'gear-scale', 'symbol' => 'symbol-blue', 'name' => 'Rogue Calibrated Steel KG Discs', 'detail' => 'IPF Approved • Slim Profile Iron', 'manufacturer' => ['Rogue Fitness'], 'specification' => ['Precision Cast Iron • E-Coat Powder', 'Finish • Laser Etched Logo'], 'rating' => '±10G', 'ratingDetail' => 'CALIBRATION', 'ratingClass' => 'text-blue', 'note' => ['Competition Spec'], 'facilities' => '1,150'],
        ['icon' => 'gear-rack', 'symbol' => 'symbol-lime', 'name' => 'Eleiko IPF Competition Combo Rack', 'detail' => 'Dual Squat & Bench • Pin-and-Pipe', 'manufacturer' => ['Eleiko Sport (Sweden)'], 'specification' => ['Competition Lever Jack Arms •', 'Polyurethane Rollers • IPF Spec'], 'rating' => 'OFFICIAL', 'ratingDetail' => 'IPF', 'ratingClass' => 'text-lime', 'note' => ['Tolerance:', '<0.5mm'], 'facilities' => '840'],
        ['icon' => 'gear-bench', 'symbol' => 'symbol-orange', 'name' => 'Ghost Strong Comp Bench / Return Rollers', 'detail' => 'Integrated Roller Spot • 38cm Fat Pad', 'manufacturer' => ['Ghost Strong'], 'specification' => ['Quick lever adjustment • Grippy', 'texturized pad • 3×3 7-Gauge steel'], 'rating' => 'ELITE GRIP 9.8', 'ratingDetail' => '', 'ratingClass' => 'text-orange', 'note' => ['Non-slip vinyl'], 'facilities' => '520'],
        ['icon' => 'gear-dumbbell', 'symbol' => 'symbol-lime', 'name' => 'Kabuki Strength Transformer Bar', 'detail' => 'Adjustable Angle SSB • 24 Load Mechanics', 'manufacturer' => ['Kabuki Strength'], 'specification' => ['1.5" diameter sleeve • Removable', 'handles • Spring pin selector'], 'rating' => 'PATENTED CAM', 'ratingDetail' => '', 'ratingClass' => 'text-lime', 'note' => ['6 angle settings'], 'facilities' => '390'],
        ['icon' => 'gear-weight', 'symbol' => 'symbol-blue', 'name' => 'Westside Barbell Pro Reverse Hyper', 'detail' => 'Posterior Chain Restoration • Pendulum Arm', 'manufacturer' => ['Westside Barbell /', 'Rogue'], 'specification' => ['Industrial Strap attachment • UHMW', 'step plates • 180kg load rating'], 'rating' => 'ORIGINAL', 'ratingDetail' => 'SPEC', 'ratingClass' => 'text-blue', 'note' => ['Louie Simmons', 'design'], 'facilities' => '640'],
        ['icon' => 'gear-rack', 'symbol' => 'symbol-lime', 'name' => 'Texas Strength Systems Monolift', 'detail' => 'Full Heavyweight Monolift • Counter-Weight Arms', 'manufacturer' => ['Texas Strength', 'Systems'], 'specification' => ['Hydraulic foot jack lift • Multi-point', 'height adjustments • 1000kg load test'], 'rating' => 'HYDRAULIC', 'ratingDetail' => '', 'ratingClass' => 'text-lime', 'note' => ['Heavyweight power'], 'facilities' => '280'],
    ],
];
