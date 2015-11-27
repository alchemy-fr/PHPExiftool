<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsUsed extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'AFPointsUsed';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'AF Points Used';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '(none)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Center',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Upper-right',
        ),
        4 => array(
            'Id' => 8,
            'Label' => 'Right',
        ),
        5 => array(
            'Id' => 16,
            'Label' => 'Lower-right',
        ),
        6 => array(
            'Id' => 32,
            'Label' => 'Bottom',
        ),
        7 => array(
            'Id' => 64,
            'Label' => 'Lower-left',
        ),
        8 => array(
            'Id' => 128,
            'Label' => 'Left',
        ),
        9 => array(
            'Id' => 256,
            'Label' => 'Upper-left',
        ),
        10 => array(
            'Id' => 512,
            'Label' => 'Far Right',
        ),
        11 => array(
            'Id' => 1024,
            'Label' => 'Far Left',
        ),
        12 => array(
            'Id' => 2048,
            'Label' => 'Upper-middle',
        ),
        13 => array(
            'Id' => 4096,
            'Label' => 'Near Right',
        ),
        14 => array(
            'Id' => 8192,
            'Label' => 'Lower-middle',
        ),
        15 => array(
            'Id' => 16384,
            'Label' => 'Near Left',
        ),
        16 => array(
            'Id' => 32768,
            'Label' => 'Upper Far Right',
        ),
        17 => array(
            'Id' => 65536,
            'Label' => 'Lower Far Right',
        ),
        18 => array(
            'Id' => 131072,
            'Label' => 'Lower Far Left',
        ),
        19 => array(
            'Id' => 262144,
            'Label' => 'Upper Far Left',
        ),
        20 => array(
            'Id' => 0,
            'Label' => '(none)',
        ),
        21 => array(
            'Id' => 1,
            'Label' => 'G9',
        ),
        22 => array(
            'Id' => 2,
            'Label' => 'G10',
        ),
        23 => array(
            'Id' => 4,
            'Label' => 'G11',
        ),
        24 => array(
            'Id' => 8,
            'Label' => 'H2',
        ),
        25 => array(
            'Id' => 16,
            'Label' => 'B3',
        ),
        26 => array(
            'Id' => 32,
            'Label' => 'H4',
        ),
        27 => array(
            'Id' => 64,
            'Label' => 'H5',
        ),
        28 => array(
            'Id' => 128,
            'Label' => 'H6',
        ),
        29 => array(
            'Id' => 256,
            'Label' => 'B7',
        ),
        30 => array(
            'Id' => 512,
            'Label' => 'B8',
        ),
        31 => array(
            'Id' => 1024,
            'Label' => 'B9',
        ),
        32 => array(
            'Id' => 2048,
            'Label' => 'H10',
        ),
        33 => array(
            'Id' => 4096,
            'Label' => 'C1',
        ),
        34 => array(
            'Id' => 8192,
            'Label' => 'I6',
        ),
        35 => array(
            'Id' => 16384,
            'Label' => 'I7',
        ),
        36 => array(
            'Id' => 32768,
            'Label' => 'C4',
        ),
        37 => array(
            'Id' => 65536,
            'Label' => 'C5',
        ),
        38 => array(
            'Id' => 131072,
            'Label' => 'C6',
        ),
        39 => array(
            'Id' => 262144,
            'Label' => 'C7',
        ),
        40 => array(
            'Id' => 524288,
            'Label' => 'C8',
        ),
        41 => array(
            'Id' => 1048576,
            'Label' => 'C9',
        ),
        42 => array(
            'Id' => 2097152,
            'Label' => 'C10',
        ),
        43 => array(
            'Id' => 4194304,
            'Label' => 'C11',
        ),
        44 => array(
            'Id' => 8388608,
            'Label' => 'D1',
        ),
        45 => array(
            'Id' => 16777216,
            'Label' => 'D2',
        ),
        46 => array(
            'Id' => 33554432,
            'Label' => 'D3',
        ),
        47 => array(
            'Id' => 67108864,
            'Label' => 'D4',
        ),
        48 => array(
            'Id' => 134217728,
            'Label' => 'D5',
        ),
        49 => array(
            'Id' => 268435456,
            'Label' => 'D6',
        ),
        50 => array(
            'Id' => 536870912,
            'Label' => 'D7',
        ),
        51 => array(
            'Id' => 1073741824,
            'Label' => 'D8',
        ),
        52 => array(
            'Id' => 2147483648,
            'Label' => 'D9',
        ),
        53 => array(
            'Id' => 4294967296,
            'Label' => 'D10',
        ),
        54 => array(
            'Id' => 8589934592,
            'Label' => 'D11',
        ),
        55 => array(
            'Id' => 17179869184,
            'Label' => 'E1',
        ),
        56 => array(
            'Id' => 34359738368,
            'Label' => 'E2',
        ),
        57 => array(
            'Id' => 68719476736,
            'Label' => 'E3',
        ),
        58 => array(
            'Id' => 137438953472,
            'Label' => 'E4',
        ),
        59 => array(
            'Id' => 274877906944,
            'Label' => 'E5',
        ),
        60 => array(
            'Id' => 549755813888,
            'Label' => 'E6',
        ),
        61 => array(
            'Id' => 1099511627776,
            'Label' => 'E7',
        ),
        62 => array(
            'Id' => 2199023255552,
            'Label' => 'E8',
        ),
        63 => array(
            'Id' => 4398046511104,
            'Label' => 'E9',
        ),
        64 => array(
            'Id' => 8796093022208,
            'Label' => 'E10',
        ),
        65 => array(
            'Id' => 17592186044416,
            'Label' => 'E11',
        ),
        66 => array(
            'Id' => 35184372088832,
            'Label' => 'F1',
        ),
        67 => array(
            'Id' => 70368744177664,
            'Label' => 'F2',
        ),
        68 => array(
            'Id' => 140737488355328,
            'Label' => 'F3',
        ),
        69 => array(
            'Id' => 281474976710656,
            'Label' => 'F4',
        ),
        70 => array(
            'Id' => 562949953421312,
            'Label' => 'F5',
        ),
        71 => array(
            'Id' => 1125899906842624,
            'Label' => 'F6',
        ),
        72 => array(
            'Id' => 2251799813685248,
            'Label' => 'F7',
        ),
        73 => array(
            'Id' => 4503599627370496,
            'Label' => 'F8',
        ),
        74 => array(
            'Id' => 9007199254740992,
            'Label' => 'F9',
        ),
        75 => array(
            'Id' => 18014398509481984,
            'Label' => 'F10',
        ),
        76 => array(
            'Id' => 36028797018963968,
            'Label' => 'F11',
        ),
        77 => array(
            'Id' => 72057594037927936,
            'Label' => 'G1',
        ),
        78 => array(
            'Id' => 144115188075855872,
            'Label' => 'G2',
        ),
        79 => array(
            'Id' => 288230376151711744,
            'Label' => 'G3',
        ),
        80 => array(
            'Id' => 576460752303423488,
            'Label' => 'G4',
        ),
        81 => array(
            'Id' => 1152921504606846976,
            'Label' => 'G5',
        ),
        82 => array(
            'Id' => 2305843009213693952,
            'Label' => 'G6',
        ),
        83 => array(
            'Id' => 4611686018427387904,
            'Label' => 'G7',
        ),
        9223372036854775808 => array(
            'Id' => 9223372036854775808,
            'Label' => 'G8',
        ),
    );

    protected $Index = 'mixed';

}
