<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Photo extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'headline'
    ];

    public $slugAttributes = [
        'title',
    ];

    // public $mediasParams = [
    //     'cover' => [
    //         'default' => [
    //             [
    //                 'name' => 'default',
    //                 'ratio' => 1,
    //             ],
    //         ],
    //         'desktop' => [
    //             [
    //                 'name' => 'desktop',
    //                 'ratio' => 16 / 9,
    //             ],
    //         ],
    //         'mobile' => [
    //             [
    //                 'name' => 'mobile',
    //                 'ratio' => 1,
    //             ],
    //         ],
    //         'flexible' => [
    //             [
    //                 'name' => 'free',
    //                 'ratio' => 0,
    //             ],
    //             [
    //                 'name' => 'landscape',
    //                 'ratio' => 16 / 9,
    //             ],
    //             [
    //                 'name' => 'portrait',
    //                 'ratio' => 3 / 5,
    //             ],
    //         ],
    //     ],
    // ];

    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
