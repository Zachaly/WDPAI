<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database;
use App\Repository\UserRepository;

final class ProfileController extends AppController
{
    private const PROFILES = [
        1 => [
            'name' => 'Alex Lith',
            'username' => 'Alex_Lith',
            'initials' => 'AL',
            'credential' => 'USAPL 93KG COMPETITOR',
            'location' => 'Austin, TX',
            'joined' => 'Joined March 2023',
            'bio' => 'Competitive powerlifter tracking technique, training volume, and bar speed through the qualifying season. Always happy to trade thoughtful form checks.',
            'posts' => '34',
            'karma' => '812',
            'views' => '18.4K',
            'total' => '672.5 kg',
            'squat' => '242.5 kg',
            'bench' => '155 kg',
            'deadlift' => '275 kg',
            'image' => '',
            'postTitle' => 'Squat RPE 9.5 lockout hitch: knee valgus or quad fatigue off the pins?',
            'postCategory' => 'FORM ANALYSIS',
            'postTime' => '14 MIN AGO',
            'postHref' => '/forum/1',
            'badge' => 'FORM CHECK REGULAR',
        ],
        2 => [
            'name' => 'Marcus Knurling',
            'username' => 'MarcusKnurling',
            'initials' => 'MK',
            'credential' => 'TIER II EQUIPMENT AUDITOR',
            'location' => 'Austin, TX',
            'joined' => 'Joined June 2021',
            'bio' => 'Independent barbell auditor documenting steel, sleeve rotation, and knurl wear with calibrated instruments. Evidence first; opinions second.',
            'posts' => '74',
            'karma' => '1,240',
            'views' => '42.8K',
            'total' => '585 kg',
            'squat' => '210 kg',
            'bench' => '145 kg',
            'deadlift' => '230 kg',
            'image' => '',
            'postTitle' => 'Eleiko IPF Comp vs Rogue Ohio Power Bar: two-year knurl wear report',
            'postCategory' => 'GEAR DIAGNOSTICS',
            'postTime' => '2 HOURS AGO',
            'postHref' => '/forum/2',
            'badge' => 'VERIFIED EQUIPMENT AUDITOR',
        ],
        3 => [
            'name' => 'Jordan Donnelly',
            'username' => 'J_Donnelly',
            'initials' => 'JD',
            'credential' => 'METRO IRON REGULAR',
            'location' => 'Austin, TX',
            'joined' => 'Joined October 2022',
            'bio' => 'Lifter and platform regular sharing useful facility notes, rack availability updates, and training-floor etiquette from Metro Iron.',
            'posts' => '19',
            'karma' => '286',
            'views' => '7.2K',
            'total' => '520 kg',
            'squat' => '190 kg',
            'bench' => '125 kg',
            'deadlift' => '205 kg',
            'image' => '',
            'postTitle' => 'Peak hour rack availability: new warmup floor rule and queue etiquette',
            'postCategory' => 'SANCTUARY INTEL',
            'postTime' => '8 HOURS AGO',
            'postHref' => '/forum/3',
            'badge' => 'COMMUNITY CONTRIBUTOR',
        ],
        4 => [
            'name' => 'Elena Korov',
            'username' => 'Elena_K',
            'initials' => 'EK',
            'credential' => 'MASTER SPOTTER',
            'location' => 'Columbus, OH',
            'joined' => 'Joined January 2020',
            'bio' => 'Powerlifting coach and verified spotter. I help lifters turn clear camera angles and useful session data into practical technique cues.',
            'posts' => '128',
            'karma' => '4,820',
            'views' => '96.1K',
            'total' => '644 kg',
            'squat' => '233.5 kg',
            'bench' => '145 kg',
            'deadlift' => '265.5 kg',
            'image' => '',
            'postTitle' => 'Cutting to 82.5 kg for WRPF Nationals: water cut and attempt selections',
            'postCategory' => 'MEET DEBRIEF',
            'postTime' => '14 HOURS AGO',
            'postHref' => '/forum/4',
            'badge' => 'MASTER SPOTTER · 840 REP',
        ],
        5 => [
            'name' => 'Road Warrior',
            'username' => 'RoadWarrior_PR',
            'initials' => 'RW',
            'credential' => 'TRAVEL LIFTER',
            'location' => 'Dallas, TX',
            'joined' => 'Joined May 2022',
            'bio' => 'Finding reliable strength gyms on the road. Sharing verified drop-in details, calibrated equipment notes, and keycard access tips.',
            'posts' => '27',
            'karma' => '354',
            'views' => '11.9K',
            'total' => '610 kg',
            'squat' => '220 kg',
            'bench' => '150 kg',
            'deadlift' => '240 kg',
            'image' => '',
            'postTitle' => '24/7 keycard powerlifting gyms in Dallas and Fort Worth',
            'postCategory' => 'CITY GUIDE',
            'postTime' => '1 DAY AGO',
            'postHref' => '/forum/5',
            'badge' => 'COMMUNITY CONTRIBUTOR',
        ],
        6 => [
            'name' => 'Heavy Dan',
            'username' => 'HeavyDan_PR',
            'initials' => 'HD',
            'credential' => 'PROGRAM ANALYST',
            'location' => 'Calgary, AB',
            'joined' => 'Joined August 2021',
            'bio' => 'Tracking volume, fatigue, and recovery across long training blocks. Interested in evidence-based programming and sustainable progress.',
            'posts' => '41',
            'karma' => '478',
            'views' => '15.7K',
            'total' => '700 kg',
            'squat' => '255 kg',
            'bench' => '180 kg',
            'deadlift' => '265 kg',
            'image' => '',
            'postTitle' => 'Sheiko Gold vs Calgary Barbell: bench volume and recovery',
            'postCategory' => 'PROGRAMMING',
            'postTime' => '1 DAY AGO',
            'postHref' => '/forum/6',
            'badge' => 'PROGRAM ANALYST',
        ],
        7 => [
            'name' => 'Marcus Vance',
            'username' => 'MarcusVance',
            'initials' => 'MV',
            'credential' => 'TIER II AUDITOR',
            'location' => 'Austin, TX',
            'joined' => 'Joined February 2021',
            'bio' => 'Strength athlete and equipment auditor. I document training sessions with verified barbell velocity telemetry and peer-reviewed hardware checks.',
            'posts' => '74',
            'karma' => '2,460',
            'views' => '38.2K',
            'total' => '817.5 kg',
            'squat' => '295 kg',
            'bench' => '192.5 kg',
            'deadlift' => '330 kg',
            'image' => '/assets/img/marcus-vance.jpg',
            'postTitle' => 'Platform 04 bar speed telemetry: 275 kg top set audit',
            'postCategory' => 'TELEMETRY LOG',
            'postTime' => '3 HOURS AGO',
            'postHref' => '/forum/2',
            'badge' => 'TIER II AUDITOR · 24 PEER AUDITS',
        ],
        8 => [
            'name' => 'Dave Knurl',
            'username' => 'DaveKnurl',
            'initials' => 'DK',
            'credential' => 'IPF COACH',
            'location' => 'Seattle, WA',
            'joined' => 'Joined July 2019',
            'bio' => 'Coach and equipment enthusiast focused on repeatable technique, stable positions, and useful feedback for competitive lifters.',
            'posts' => '96',
            'karma' => '3,140',
            'views' => '64.5K',
            'total' => '635 kg',
            'squat' => '230 kg',
            'bench' => '155 kg',
            'deadlift' => '250 kg',
            'image' => '',
            'postTitle' => 'Squat walkout consistency: three cues that carry over',
            'postCategory' => 'COACHING',
            'postTime' => '5 HOURS AGO',
            'postHref' => '/forum/1',
            'badge' => 'VERIFIED IPF COACH',
        ],
        9 => [
            'name' => 'Metro Iron Staff',
            'username' => 'MetroIronStaff',
            'initials' => 'MI',
            'credential' => 'HQ VERIFIED',
            'location' => 'Austin, TX',
            'joined' => 'Joined April 2020',
            'bio' => 'Official facility updates from Metro Iron: platform policies, equipment maintenance, operating hours, and gym-floor announcements.',
            'posts' => '52',
            'karma' => '1,080',
            'views' => '29.4K',
            'total' => '—',
            'squat' => '—',
            'bench' => '—',
            'deadlift' => '—',
            'image' => '',
            'postTitle' => 'Peak hour rack availability: new warmup floor rule and queue etiquette',
            'postCategory' => 'FACILITY UPDATE',
            'postTime' => '8 HOURS AGO',
            'postHref' => '/forum/3',
            'badge' => 'VERIFIED STRENGTH SANCTUARY',
        ],
    ];

    public function index(): void
    {
        $userId = $_SESSION['user_id'] ?? null;
        if (!is_int($userId) && !(is_string($userId) && ctype_digit($userId))) {
            $this->redirect('/login');
        }

        $user = (new UserRepository(Database::connect()))->findById((int) $userId);
        if ($user === null) {
            unset(
                $_SESSION['user_id'],
                $_SESSION['user_email'],
                $_SESSION['user_name'],
                $_SESSION['user_handle'],
                $_SESSION['logged_in_at'],
            );
            $this->redirect('/login');
        }

        $name = $user->firstName . ' ' . $user->lastName;
        $createdAt = $user->createdAt;
        $joined = $createdAt === null
            ? ''
            : 'Joined ' . $createdAt->format('F Y');

        $this->render('profile', [
            'pageTitle' => $name . ' — IronPulse Profile',
            'pageDescription' => 'Account profile for ' . $name . '.',
            'bodyClass' => 'profile-page',
            'pageStylesheets' => [
                '/css/page-components.css',
                '/css/forum.css',
                '/css/profile.css',
            ],
            'pageScripts' => ['/js/profile.js'],
            'isOwnProfile' => true,
            'profile' => [
                'id' => $user->id,
                'name' => $name,
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'username' => $user->handle,
                'initials' => strtoupper($this->initial($user->firstName) . $this->initial($user->lastName)),
                'email' => $user->email,
                'location' => $user->city,
                'joined' => $joined,
                'createdAt' => $createdAt?->format('F j, Y') ?? '',
                'termsAcceptedAt' => $user->termsAcceptedAt->format('F j, Y'),
                'description' => $user->description,
                'image' => '',
            ],
        ]);
    }

    private function initial(string $name): string
    {
        return preg_match('/^./u', $name, $matches) === 1 ? $matches[0] : '';
    }

    public function show(int $id): void
    {
        $this->renderProfile($id);
    }

    private function renderProfile(int $id): void
    {
        $profile = self::PROFILES[$id] ?? self::PROFILES[7];

        $this->render('profile', [
            'pageTitle' => $profile['name'] . ' — IronPulse Profile',
            'pageDescription' => 'Training stats, community posts, and verified telemetry for ' . $profile['name'] . '.',
            'bodyClass' => 'profile-page',
            'pageStylesheets' => [
                '/css/page-components.css',
                '/css/forum.css',
                '/css/profile.css',
            ],
            'pageScripts' => ['/js/profile.js'],
            'profile' => $profile,
        ]);
    }
}
