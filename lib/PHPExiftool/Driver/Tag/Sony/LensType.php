<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
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
class LensType extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'LensType';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Lens Type';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Minolta AF 28-85mm F3.5-4.5 New',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Minolta AF 80-200mm F2.8 HS-APO G',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Minolta AF 28-70mm F2.8 G',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Minolta AF 28-80mm F4-5.6',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Minolta AF 85mm F1.4G',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Minolta AF 35-70mm F3.5-4.5 [II]',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Minolta AF 24-85mm F3.5-4.5 [New]',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6 APO [New] or 100-400mm or Sigma Lens',
        ),
        '7.1' => array(
            'Id' => '7.1',
            'Label' => 'Minolta AF 100-400mm F4.5-6.7 APO',
        ),
        '7.2' => array(
            'Id' => '7.2',
            'Label' => 'Sigma AF 100-300mm F4 EX DG IF',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Minolta AF 70-210mm F4.5-5.6 [II]',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Minolta AF 50mm F3.5 Macro',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Minolta AF 28-105mm F3.5-4.5 [New]',
        ),
        11 => array(
            'Id' => 11,
            'Label' => 'Minolta AF 300mm F4 HS-APO G',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Minolta AF 100mm F2.8 Soft Focus',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Minolta AF 75-300mm F4.5-5.6 (New or II)',
        ),
        14 => array(
            'Id' => 14,
            'Label' => 'Minolta AF 100-400mm F4.5-6.7 APO',
        ),
        15 => array(
            'Id' => 15,
            'Label' => 'Minolta AF 400mm F4.5 HS-APO G',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Minolta AF 17-35mm F3.5 G',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Minolta AF 20-35mm F3.5-4.5',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Minolta AF 28-80mm F3.5-5.6 II',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'Minolta AF 35mm F1.4 G',
        ),
        20 => array(
            'Id' => 20,
            'Label' => 'Minolta/Sony 135mm F2.8 [T4.5] STF',
        ),
        22 => array(
            'Id' => 22,
            'Label' => 'Minolta AF 35-80mm F4-5.6 II',
        ),
        23 => array(
            'Id' => 23,
            'Label' => 'Minolta AF 200mm F4 Macro APO G',
        ),
        24 => array(
            'Id' => 24,
            'Label' => 'Minolta/Sony AF 24-105mm F3.5-4.5 (D) or Sigma or Tamron Lens',
        ),
        '24.1' => array(
            'Id' => '24.1',
            'Label' => 'Sigma 18-50mm F2.8',
        ),
        '24.2' => array(
            'Id' => '24.2',
            'Label' => 'Sigma 17-70mm F2.8-4.5 DC Macro',
        ),
        '24.3' => array(
            'Id' => '24.3',
            'Label' => 'Sigma 20-40mm F2.8 EX DG Aspherical IF',
        ),
        '24.4' => array(
            'Id' => '24.4',
            'Label' => 'Sigma 18-200mm F3.5-6.3 DC',
        ),
        '24.5' => array(
            'Id' => '24.5',
            'Label' => 'Sigma DC 18-125mm F4-5,6 D',
        ),
        '24.6' => array(
            'Id' => '24.6',
            'Label' => 'Tamron SP AF 28-75mm F2.8 XR Di LD Aspherical [IF] Macro',
        ),
        '24.7' => array(
            'Id' => '24.7',
            'Label' => 'Sigma 15-30mm F3.5-4.5 EX DG Aspherical',
        ),
        25 => array(
            'Id' => 25,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6 APO (D) or Sigma Lens',
        ),
        '25.1' => array(
            'Id' => '25.1',
            'Label' => 'Sigma 100-300mm F4 EX (APO (D) or D IF)',
        ),
        '25.2' => array(
            'Id' => '25.2',
            'Label' => 'Sigma 70mm F2.8 EX DG Macro',
        ),
        '25.3' => array(
            'Id' => '25.3',
            'Label' => 'Sigma 20mm F1.8 EX DG Aspherical RF',
        ),
        '25.4' => array(
            'Id' => '25.4',
            'Label' => 'Sigma 30mm F1.4 EX DC',
        ),
        '25.5' => array(
            'Id' => '25.5',
            'Label' => 'Sigma 24mm F1.8 EX DG ASP Macro',
        ),
        27 => array(
            'Id' => 27,
            'Label' => 'Minolta AF 85mm F1.4 G (D)',
        ),
        28 => array(
            'Id' => 28,
            'Label' => 'Minolta/Sony AF 100mm F2.8 Macro (D) or Tamron Lens',
        ),
        '28.1' => array(
            'Id' => '28.1',
            'Label' => 'Tamron SP AF 90mm F2.8 Di Macro',
        ),
        '28.2' => array(
            'Id' => '28.2',
            'Label' => 'Tamron SP AF 180mm F3.5 Di LD [IF] Macro',
        ),
        29 => array(
            'Id' => 29,
            'Label' => 'Minolta/Sony AF 75-300mm F4.5-5.6 (D)',
        ),
        30 => array(
            'Id' => 30,
            'Label' => 'Minolta AF 28-80mm F3.5-5.6 (D) or Sigma Lens',
        ),
        '30.1' => array(
            'Id' => '30.1',
            'Label' => 'Sigma AF 10-20mm F4-5.6 EX DC',
        ),
        '30.2' => array(
            'Id' => '30.2',
            'Label' => 'Sigma AF 12-24mm F4.5-5.6 EX DG',
        ),
        '30.3' => array(
            'Id' => '30.3',
            'Label' => 'Sigma 28-70mm EX DG F2.8',
        ),
        '30.4' => array(
            'Id' => '30.4',
            'Label' => 'Sigma 55-200mm F4-5.6 DC',
        ),
        31 => array(
            'Id' => 31,
            'Label' => 'Minolta/Sony AF 50mm F2.8 Macro (D) or F3.5',
        ),
        '31.1' => array(
            'Id' => '31.1',
            'Label' => 'Minolta/Sony AF 50mm F3.5 Macro',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Minolta/Sony AF 300mm F2.8 G or 1.5x Teleconverter',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Minolta/Sony AF 70-200mm F2.8 G',
        ),
        35 => array(
            'Id' => 35,
            'Label' => 'Minolta AF 85mm F1.4 G (D) Limited',
        ),
        36 => array(
            'Id' => 36,
            'Label' => 'Minolta AF 28-100mm F3.5-5.6 (D)',
        ),
        38 => array(
            'Id' => 38,
            'Label' => 'Minolta AF 17-35mm F2.8-4 (D)',
        ),
        39 => array(
            'Id' => 39,
            'Label' => 'Minolta AF 28-75mm F2.8 (D)',
        ),
        40 => array(
            'Id' => 40,
            'Label' => 'Minolta/Sony AF DT 18-70mm F3.5-5.6 (D)',
        ),
        41 => array(
            'Id' => 41,
            'Label' => 'Minolta/Sony AF DT 11-18mm F4.5-5.6 (D) or Tamron Lens',
        ),
        '41.1' => array(
            'Id' => '41.1',
            'Label' => 'Tamron SP AF 11-18mm F4.5-5.6 Di II LD Aspherical IF',
        ),
        42 => array(
            'Id' => 42,
            'Label' => 'Minolta/Sony AF DT 18-200mm F3.5-6.3 (D)',
        ),
        43 => array(
            'Id' => 43,
            'Label' => 'Sony 35mm F1.4 G (SAL35F14G)',
        ),
        44 => array(
            'Id' => 44,
            'Label' => 'Sony 50mm F1.4 (SAL50F14)',
        ),
        45 => array(
            'Id' => 45,
            'Label' => 'Carl Zeiss Planar T* 85mm F1.4 ZA (SAL85F14Z)',
        ),
        46 => array(
            'Id' => 46,
            'Label' => 'Carl Zeiss Vario-Sonnar T* DT 16-80mm F3.5-4.5 ZA (SAL1680Z)',
        ),
        47 => array(
            'Id' => 47,
            'Label' => 'Carl Zeiss Sonnar T* 135mm F1.8 ZA (SAL135F18Z)',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Carl Zeiss Vario-Sonnar T* 24-70mm F2.8 ZA SSM (SAL2470Z) or Other Lens',
        ),
        '48.1' => array(
            'Id' => '48.1',
            'Label' => 'Carl Zeiss Vario-Sonnar T* 24-70mm F2.8 ZA SSM II (SAL2470Z2)',
        ),
        '48.2' => array(
            'Id' => '48.2',
            'Label' => 'Tamron SP 24-70mm F2.8 Di USD',
        ),
        49 => array(
            'Id' => 49,
            'Label' => 'Sony DT 55-200mm F4-5.6 (SAL55200)',
        ),
        50 => array(
            'Id' => 50,
            'Label' => 'Sony DT 18-250mm F3.5-6.3 (SAL18250)',
        ),
        51 => array(
            'Id' => 51,
            'Label' => 'Sony DT 16-105mm F3.5-5.6 (SAL16105)',
        ),
        52 => array(
            'Id' => 52,
            'Label' => 'Sony 70-300mm F4.5-5.6 G SSM (SAL70300G) or G SSM II or Tamron Lens',
        ),
        '52.1' => array(
            'Id' => '52.1',
            'Label' => 'Sony 70-300mm F4.5-5.6 G SSM II (SAL70300G2)',
        ),
        '52.2' => array(
            'Id' => '52.2',
            'Label' => 'Tamron SP 70-300mm F4-5.6 Di USD',
        ),
        53 => array(
            'Id' => 53,
            'Label' => 'Sony 70-400mm F4-5.6 G SSM (SAL70400G)',
        ),
        54 => array(
            'Id' => 54,
            'Label' => 'Carl Zeiss Vario-Sonnar T* 16-35mm F2.8 ZA SSM (SAL1635Z) or ZA SSM II',
        ),
        '54.1' => array(
            'Id' => '54.1',
            'Label' => 'Carl Zeiss Vario-Sonnar T* 16-35mm F2.8 ZA SSM II (SAL1635Z2)',
        ),
        55 => array(
            'Id' => 55,
            'Label' => 'Sony DT 18-55mm F3.5-5.6 SAM (SAL1855) or SAM II',
        ),
        '55.1' => array(
            'Id' => '55.1',
            'Label' => 'Sony DT 18-55mm F3.5-5.6 SAM II (SAL18552)',
        ),
        56 => array(
            'Id' => 56,
            'Label' => 'Sony DT 55-200mm F4-5.6 SAM (SAL55200-2)',
        ),
        57 => array(
            'Id' => 57,
            'Label' => 'Sony DT 50mm F1.8 SAM (SAL50F18) or Tamron Lens or Commlite CM-EF-NEX adapter',
        ),
        '57.1' => array(
            'Id' => '57.1',
            'Label' => 'Tamron SP AF 60mm F2 Di II LD [IF] Macro 1:1',
        ),
        '57.2' => array(
            'Id' => '57.2',
            'Label' => 'Tamron 18-270mm F3.5-6.3 Di II PZD',
        ),
        58 => array(
            'Id' => 58,
            'Label' => 'Sony DT 30mm F2.8 Macro SAM (SAL30M28)',
        ),
        59 => array(
            'Id' => 59,
            'Label' => 'Sony 28-75mm F2.8 SAM (SAL2875)',
        ),
        60 => array(
            'Id' => 60,
            'Label' => 'Carl Zeiss Distagon T* 24mm F2 ZA SSM (SAL24F20Z)',
        ),
        61 => array(
            'Id' => 61,
            'Label' => 'Sony 85mm F2.8 SAM (SAL85F28)',
        ),
        62 => array(
            'Id' => 62,
            'Label' => 'Sony DT 35mm F1.8 SAM (SAL35F18)',
        ),
        63 => array(
            'Id' => 63,
            'Label' => 'Sony DT 16-50mm F2.8 SSM (SAL1650)',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Sony 500mm F4 G SSM (SAL500F40G)',
        ),
        65 => array(
            'Id' => 65,
            'Label' => 'Sony DT 18-135mm F3.5-5.6 SAM (SAL18135)',
        ),
        66 => array(
            'Id' => 66,
            'Label' => 'Sony 300mm F2.8 G SSM II (SAL300F28G2)',
        ),
        67 => array(
            'Id' => 67,
            'Label' => 'Sony 70-200mm F2.8 G SSM II (SAL70200G2)',
        ),
        68 => array(
            'Id' => 68,
            'Label' => 'Sony DT 55-300mm F4.5-5.6 SAM (SAL55300)',
        ),
        69 => array(
            'Id' => 69,
            'Label' => 'Sony 70-400mm F4-5.6 G SSM II (SAL70400G2)',
        ),
        70 => array(
            'Id' => 70,
            'Label' => 'Carl Zeiss Planar T* 50mm F1.4 ZA SSM (SAL50F14Z)',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Tamron or Sigma Lens (128)',
        ),
        '128.1' => array(
            'Id' => '128.1',
            'Label' => 'Tamron AF 18-200mm F3.5-6.3 XR Di II LD Aspherical [IF] Macro',
        ),
        '128.2' => array(
            'Id' => '128.2',
            'Label' => 'Tamron AF 28-300mm F3.5-6.3 XR Di LD Aspherical [IF] Macro',
        ),
        '128.3' => array(
            'Id' => '128.3',
            'Label' => 'Tamron AF 28-200mm F3.8-5.6 XR Di Aspherical [IF] Macro',
        ),
        '128.4' => array(
            'Id' => '128.4',
            'Label' => 'Tamron SP AF 17-35mm F2.8-4 Di LD Aspherical IF',
        ),
        '128.5' => array(
            'Id' => '128.5',
            'Label' => 'Sigma AF 50-150mm F2.8 EX DC APO HSM II',
        ),
        '128.6' => array(
            'Id' => '128.6',
            'Label' => 'Sigma 10-20mm F3.5 EX DC HSM',
        ),
        '128.7' => array(
            'Id' => '128.7',
            'Label' => 'Sigma 70-200mm F2.8 II EX DG APO MACRO HSM',
        ),
        '128.8' => array(
            'Id' => '128.8',
            'Label' => 'Sigma 10mm F2.8 EX DC HSM Fisheye',
        ),
        '128.9' => array(
            'Id' => '128.9',
            'Label' => 'Sigma 50mm F1.4 EX DG HSM',
        ),
        '128.10' => array(
            'Id' => '128.10',
            'Label' => 'Sigma 85mm F1.4 EX DG HSM',
        ),
        '128.11' => array(
            'Id' => '128.11',
            'Label' => 'Sigma 24-70mm F2.8 IF EX DG HSM',
        ),
        '128.12' => array(
            'Id' => '128.12',
            'Label' => 'Sigma 18-250mm F3.5-6.3 DC OS HSM',
        ),
        '128.13' => array(
            'Id' => '128.13',
            'Label' => 'Sigma 17-50mm F2.8 EX DC HSM',
        ),
        '128.14' => array(
            'Id' => '128.14',
            'Label' => 'Sigma 17-70mm F2.8-4 DC Macro HSM',
        ),
        '128.15' => array(
            'Id' => '128.15',
            'Label' => 'Sigma 150mm F2.8 EX DG OS HSM APO Macro',
        ),
        '128.16' => array(
            'Id' => '128.16',
            'Label' => 'Sigma 150-500mm F5-6.3 APO DG OS HSM',
        ),
        '128.17' => array(
            'Id' => '128.17',
            'Label' => 'Tamron AF 28-105mm F4-5.6 [IF]',
        ),
        '128.18' => array(
            'Id' => '128.18',
            'Label' => 'Sigma 35mm F1.4 DG HSM',
        ),
        '128.19' => array(
            'Id' => '128.19',
            'Label' => 'Sigma 18-35mm F1.8 DC HSM',
        ),
        '128.20' => array(
            'Id' => '128.20',
            'Label' => 'Sigma 50-500mm F4.5-6.3 APO DG OS HSM',
        ),
        '128.21' => array(
            'Id' => '128.21',
            'Label' => 'Sigma 24-105mm F4 DG HSM | A',
        ),
        '128.22' => array(
            'Id' => '128.22',
            'Label' => 'Sigma 30mm F1.4',
        ),
        '128.23' => array(
            'Id' => '128.23',
            'Label' => 'Sigma 35mm F1.4 DG HSM | A',
        ),
        '128.24' => array(
            'Id' => '128.24',
            'Label' => 'Sigma 105mm F2.8 EX DG OS HSM Macro',
        ),
        '128.25' => array(
            'Id' => '128.25',
            'Label' => 'Sigma 180mm F2.8 EX DG OS HSM APO Macro',
        ),
        '128.26' => array(
            'Id' => '128.26',
            'Label' => 'Sigma 18-300mm F3.5-6.3 DC Macro HSM | C',
        ),
        '128.27' => array(
            'Id' => '128.27',
            'Label' => 'Sigma 18-50mm F2.8-4.5 DC HSM',
        ),
        129 => array(
            'Id' => 129,
            'Label' => 'Tamron Lens (129)',
        ),
        '129.1' => array(
            'Id' => '129.1',
            'Label' => 'Tamron 200-400mm F5.6 LD',
        ),
        '129.2' => array(
            'Id' => '129.2',
            'Label' => 'Tamron 70-300mm F4-5.6 LD',
        ),
        131 => array(
            'Id' => 131,
            'Label' => 'Tamron 20-40mm F2.7-3.5 SP Aspherical IF',
        ),
        135 => array(
            'Id' => 135,
            'Label' => 'Vivitar 28-210mm F3.5-5.6',
        ),
        136 => array(
            'Id' => 136,
            'Label' => 'Tokina EMZ M100 AF 100mm F3.5',
        ),
        137 => array(
            'Id' => 137,
            'Label' => 'Cosina 70-210mm F2.8-4 AF',
        ),
        138 => array(
            'Id' => 138,
            'Label' => 'Soligor 19-35mm F3.5-4.5',
        ),
        139 => array(
            'Id' => 139,
            'Label' => 'Tokina AF 28-300mm F4-6.3',
        ),
        142 => array(
            'Id' => 142,
            'Label' => 'Cosina AF 70-300mm F4.5-5.6 MC',
        ),
        146 => array(
            'Id' => 146,
            'Label' => 'Voigtlander Macro APO-Lanthar 125mm F2.5 SL',
        ),
        194 => array(
            'Id' => 194,
            'Label' => 'Tamron SP AF 17-50mm F2.8 XR Di II LD Aspherical [IF]',
        ),
        202 => array(
            'Id' => 202,
            'Label' => 'Tamron SP AF 70-200mm F2.8 Di LD [IF] Macro',
        ),
        203 => array(
            'Id' => 203,
            'Label' => 'Tamron SP 70-200mm F2.8 Di USD',
        ),
        204 => array(
            'Id' => 204,
            'Label' => 'Tamron SP 24-70mm F2.8 Di USD',
        ),
        212 => array(
            'Id' => 212,
            'Label' => 'Tamron 28-300mm F3.5-6.3 Di PZD',
        ),
        213 => array(
            'Id' => 213,
            'Label' => 'Tamron 16-300mm F3.5-6.3 Di II PZD Macro',
        ),
        214 => array(
            'Id' => 214,
            'Label' => 'Tamron SP 150-600mm F5-6.3 Di USD',
        ),
        215 => array(
            'Id' => 215,
            'Label' => 'Tamron SP 15-30mm F2.8 Di USD',
        ),
        216 => array(
            'Id' => 216,
            'Label' => 'Tamron SP 45mm F1.8 Di USD',
        ),
        217 => array(
            'Id' => 217,
            'Label' => 'Tamron SP 35mm F1.8 Di USD',
        ),
        218 => array(
            'Id' => 218,
            'Label' => 'Tamron SP 90mm F2.8 Di Macro 1:1 USD (F017)',
        ),
        220 => array(
            'Id' => 220,
            'Label' => 'Tamron SP 150-600mm F5-6.3 Di USD G2',
        ),
        224 => array(
            'Id' => 224,
            'Label' => 'Tamron SP 90mm F2.8 Di Macro 1:1 USD (F004)',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Tamron Lens (255)',
        ),
        '255.1' => array(
            'Id' => '255.1',
            'Label' => 'Tamron SP AF 17-50mm F2.8 XR Di II LD Aspherical',
        ),
        '255.2' => array(
            'Id' => '255.2',
            'Label' => 'Tamron AF 18-250mm F3.5-6.3 XR Di II LD',
        ),
        '255.3' => array(
            'Id' => '255.3',
            'Label' => 'Tamron AF 55-200mm F4-5.6 Di II LD Macro',
        ),
        '255.4' => array(
            'Id' => '255.4',
            'Label' => 'Tamron AF 70-300mm F4-5.6 Di LD Macro 1:2',
        ),
        '255.5' => array(
            'Id' => '255.5',
            'Label' => 'Tamron SP AF 200-500mm F5.0-6.3 Di LD IF',
        ),
        '255.6' => array(
            'Id' => '255.6',
            'Label' => 'Tamron SP AF 10-24mm F3.5-4.5 Di II LD Aspherical IF',
        ),
        '255.7' => array(
            'Id' => '255.7',
            'Label' => 'Tamron SP AF 70-200mm F2.8 Di LD IF Macro',
        ),
        '255.8' => array(
            'Id' => '255.8',
            'Label' => 'Tamron SP AF 28-75mm F2.8 XR Di LD Aspherical IF',
        ),
        '255.9' => array(
            'Id' => '255.9',
            'Label' => 'Tamron AF 90-300mm F4.5-5.6 Telemacro',
        ),
        1868 => array(
            'Id' => 1868,
            'Label' => 'Sigma MC-11 SA-E Mount Converter with not-supported Sigma lens',
        ),
        2550 => array(
            'Id' => 2550,
            'Label' => 'Minolta AF 50mm F1.7',
        ),
        2551 => array(
            'Id' => 2551,
            'Label' => 'Minolta AF 35-70mm F4 or Other Lens',
        ),
        '2551.1' => array(
            'Id' => '2551.1',
            'Label' => 'Sigma UC AF 28-70mm F3.5-4.5',
        ),
        '2551.2' => array(
            'Id' => '2551.2',
            'Label' => 'Sigma AF 28-70mm F2.8',
        ),
        '2551.3' => array(
            'Id' => '2551.3',
            'Label' => 'Sigma M-AF 70-200mm F2.8 EX Aspherical',
        ),
        '2551.4' => array(
            'Id' => '2551.4',
            'Label' => 'Quantaray M-AF 35-80mm F4-5.6',
        ),
        '2551.5' => array(
            'Id' => '2551.5',
            'Label' => 'Tokina 28-70mm F2.8-4.5 AF',
        ),
        2552 => array(
            'Id' => 2552,
            'Label' => 'Minolta AF 28-85mm F3.5-4.5 or Other Lens',
        ),
        '2552.1' => array(
            'Id' => '2552.1',
            'Label' => 'Tokina 19-35mm F3.5-4.5',
        ),
        '2552.2' => array(
            'Id' => '2552.2',
            'Label' => 'Tokina 28-70mm F2.8 AT-X',
        ),
        '2552.3' => array(
            'Id' => '2552.3',
            'Label' => 'Tokina 80-400mm F4.5-5.6 AT-X AF II 840',
        ),
        '2552.4' => array(
            'Id' => '2552.4',
            'Label' => 'Tokina AF PRO 28-80mm F2.8 AT-X 280',
        ),
        '2552.5' => array(
            'Id' => '2552.5',
            'Label' => 'Tokina AT-X PRO [II] AF 28-70mm F2.6-2.8 270',
        ),
        '2552.6' => array(
            'Id' => '2552.6',
            'Label' => 'Tamron AF 19-35mm F3.5-4.5',
        ),
        '2552.7' => array(
            'Id' => '2552.7',
            'Label' => 'Angenieux AF 28-70mm F2.6',
        ),
        '2552.8' => array(
            'Id' => '2552.8',
            'Label' => 'Tokina AT-X 17 AF 17mm F3.5',
        ),
        '2552.9' => array(
            'Id' => '2552.9',
            'Label' => 'Tokina 20-35mm F3.5-4.5 II AF',
        ),
        2553 => array(
            'Id' => 2553,
            'Label' => 'Minolta AF 28-135mm F4-4.5 or Other Lens',
        ),
        '2553.1' => array(
            'Id' => '2553.1',
            'Label' => 'Sigma ZOOM-alpha 35-135mm F3.5-4.5',
        ),
        '2553.2' => array(
            'Id' => '2553.2',
            'Label' => 'Sigma 28-105mm F2.8-4 Aspherical',
        ),
        '2553.3' => array(
            'Id' => '2553.3',
            'Label' => 'Sigma 28-105mm F4-5.6 UC',
        ),
        '2553.4' => array(
            'Id' => '2553.4',
            'Label' => 'Tokina AT-X 242 AF 24-200mm F3.5-5.6',
        ),
        2554 => array(
            'Id' => 2554,
            'Label' => 'Minolta AF 35-105mm F3.5-4.5',
        ),
        2555 => array(
            'Id' => 2555,
            'Label' => 'Minolta AF 70-210mm F4 Macro or Sigma Lens',
        ),
        '2555.1' => array(
            'Id' => '2555.1',
            'Label' => 'Sigma 70-210mm F4-5.6 APO',
        ),
        '2555.2' => array(
            'Id' => '2555.2',
            'Label' => 'Sigma M-AF 70-200mm F2.8 EX APO',
        ),
        '2555.3' => array(
            'Id' => '2555.3',
            'Label' => 'Sigma 75-200mm F2.8-3.5',
        ),
        2556 => array(
            'Id' => 2556,
            'Label' => 'Minolta AF 135mm F2.8',
        ),
        2557 => array(
            'Id' => 2557,
            'Label' => 'Minolta/Sony AF 28mm F2.8',
        ),
        2558 => array(
            'Id' => 2558,
            'Label' => 'Minolta AF 24-50mm F4',
        ),
        2560 => array(
            'Id' => 2560,
            'Label' => 'Minolta AF 100-200mm F4.5',
        ),
        2561 => array(
            'Id' => 2561,
            'Label' => 'Minolta AF 75-300mm F4.5-5.6 or Sigma Lens',
        ),
        '2561.1' => array(
            'Id' => '2561.1',
            'Label' => 'Sigma 70-300mm F4-5.6 DL Macro',
        ),
        '2561.2' => array(
            'Id' => '2561.2',
            'Label' => 'Sigma 300mm F4 APO Macro',
        ),
        '2561.3' => array(
            'Id' => '2561.3',
            'Label' => 'Sigma AF 500mm F4.5 APO',
        ),
        '2561.4' => array(
            'Id' => '2561.4',
            'Label' => 'Sigma AF 170-500mm F5-6.3 APO Aspherical',
        ),
        '2561.5' => array(
            'Id' => '2561.5',
            'Label' => 'Tokina AT-X AF 300mm F4',
        ),
        '2561.6' => array(
            'Id' => '2561.6',
            'Label' => 'Tokina AT-X AF 400mm F5.6 SD',
        ),
        '2561.7' => array(
            'Id' => '2561.7',
            'Label' => 'Tokina AF 730 II 75-300mm F4.5-5.6',
        ),
        '2561.8' => array(
            'Id' => '2561.8',
            'Label' => 'Sigma 800mm F5.6 APO',
        ),
        '2561.9' => array(
            'Id' => '2561.9',
            'Label' => 'Sigma AF 400mm F5.6 APO Macro',
        ),
        '2561.10' => array(
            'Id' => '2561.10',
            'Label' => 'Sigma 1000mm F8 APO',
        ),
        2562 => array(
            'Id' => 2562,
            'Label' => 'Minolta AF 50mm F1.4 [New]',
        ),
        2563 => array(
            'Id' => 2563,
            'Label' => 'Minolta AF 300mm F2.8 APO or Sigma Lens',
        ),
        '2563.1' => array(
            'Id' => '2563.1',
            'Label' => 'Sigma AF 50-500mm F4-6.3 EX DG APO',
        ),
        '2563.2' => array(
            'Id' => '2563.2',
            'Label' => 'Sigma AF 170-500mm F5-6.3 APO Aspherical',
        ),
        '2563.3' => array(
            'Id' => '2563.3',
            'Label' => 'Sigma AF 500mm F4.5 EX DG APO',
        ),
        '2563.4' => array(
            'Id' => '2563.4',
            'Label' => 'Sigma 400mm F5.6 APO',
        ),
        2564 => array(
            'Id' => 2564,
            'Label' => 'Minolta AF 50mm F2.8 Macro or Sigma Lens',
        ),
        '2564.1' => array(
            'Id' => '2564.1',
            'Label' => 'Sigma 50mm F2.8 EX Macro',
        ),
        2565 => array(
            'Id' => 2565,
            'Label' => 'Minolta AF 600mm F4 APO',
        ),
        2566 => array(
            'Id' => 2566,
            'Label' => 'Minolta AF 24mm F2.8 or Sigma Lens',
        ),
        '2566.1' => array(
            'Id' => '2566.1',
            'Label' => 'Sigma 17-35mm F2.8-4 EX Aspherical',
        ),
        2572 => array(
            'Id' => 2572,
            'Label' => 'Minolta/Sony AF 500mm F8 Reflex',
        ),
        2578 => array(
            'Id' => 2578,
            'Label' => 'Minolta/Sony AF 16mm F2.8 Fisheye or Sigma Lens',
        ),
        '2578.1' => array(
            'Id' => '2578.1',
            'Label' => 'Sigma 8mm F4 EX [DG] Fisheye',
        ),
        '2578.2' => array(
            'Id' => '2578.2',
            'Label' => 'Sigma 14mm F3.5',
        ),
        '2578.3' => array(
            'Id' => '2578.3',
            'Label' => 'Sigma 15mm F2.8 Fisheye',
        ),
        2579 => array(
            'Id' => 2579,
            'Label' => 'Minolta/Sony AF 20mm F2.8 or Tokina Lens',
        ),
        '2579.1' => array(
            'Id' => '2579.1',
            'Label' => 'Tokina AT-X Pro DX 11-16mm F2.8',
        ),
        2581 => array(
            'Id' => 2581,
            'Label' => 'Minolta AF 100mm F2.8 Macro [New] or Sigma or Tamron Lens',
        ),
        '2581.1' => array(
            'Id' => '2581.1',
            'Label' => 'Sigma AF 90mm F2.8 Macro',
        ),
        '2581.2' => array(
            'Id' => '2581.2',
            'Label' => 'Sigma AF 105mm F2.8 EX [DG] Macro',
        ),
        '2581.3' => array(
            'Id' => '2581.3',
            'Label' => 'Sigma 180mm F5.6 Macro',
        ),
        '2581.4' => array(
            'Id' => '2581.4',
            'Label' => 'Sigma 180mm F3.5 EX DG Macro',
        ),
        '2581.5' => array(
            'Id' => '2581.5',
            'Label' => 'Tamron 90mm F2.8 Macro',
        ),
        2585 => array(
            'Id' => 2585,
            'Label' => 'Minolta AF 35-105mm F3.5-4.5 New or Tamron Lens',
        ),
        '2585.1' => array(
            'Id' => '2585.1',
            'Label' => 'Beroflex 35-135mm F3.5-4.5',
        ),
        '2585.2' => array(
            'Id' => '2585.2',
            'Label' => 'Tamron 24-135mm F3.5-5.6',
        ),
        2588 => array(
            'Id' => 2588,
            'Label' => 'Minolta AF 70-210mm F3.5-4.5',
        ),
        2589 => array(
            'Id' => 2589,
            'Label' => 'Minolta AF 80-200mm F2.8 APO or Tokina Lens',
        ),
        '2589.1' => array(
            'Id' => '2589.1',
            'Label' => 'Tokina 80-200mm F2.8',
        ),
        2590 => array(
            'Id' => 2590,
            'Label' => 'Minolta AF 200mm F2.8 G APO + Minolta AF 1.4x APO or Other Lens + 1.4x',
        ),
        '2590.1' => array(
            'Id' => '2590.1',
            'Label' => 'Minolta AF 600mm F4 HS-APO G + Minolta AF 1.4x APO',
        ),
        2591 => array(
            'Id' => 2591,
            'Label' => 'Minolta AF 35mm F1.4',
        ),
        2592 => array(
            'Id' => 2592,
            'Label' => 'Minolta AF 85mm F1.4 G (D)',
        ),
        2593 => array(
            'Id' => 2593,
            'Label' => 'Minolta AF 200mm F2.8 APO',
        ),
        2594 => array(
            'Id' => 2594,
            'Label' => 'Minolta AF 3x-1x F1.7-2.8 Macro',
        ),
        2596 => array(
            'Id' => 2596,
            'Label' => 'Minolta AF 28mm F2',
        ),
        2597 => array(
            'Id' => 2597,
            'Label' => 'Minolta AF 35mm F2 [New]',
        ),
        2598 => array(
            'Id' => 2598,
            'Label' => 'Minolta AF 100mm F2',
        ),
        2601 => array(
            'Id' => 2601,
            'Label' => 'Minolta AF 200mm F2.8 G APO + Minolta AF 2x APO or Other Lens + 2x',
        ),
        '2601.1' => array(
            'Id' => '2601.1',
            'Label' => 'Minolta AF 600mm F4 HS-APO G + Minolta AF 2x APO',
        ),
        2604 => array(
            'Id' => 2604,
            'Label' => 'Minolta AF 80-200mm F4.5-5.6',
        ),
        2605 => array(
            'Id' => 2605,
            'Label' => 'Minolta AF 35-80mm F4-5.6',
        ),
        2606 => array(
            'Id' => 2606,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6',
        ),
        2607 => array(
            'Id' => 2607,
            'Label' => 'Minolta AF 35-80mm F4-5.6',
        ),
        2608 => array(
            'Id' => 2608,
            'Label' => 'Minolta AF 300mm F2.8 HS-APO G',
        ),
        2609 => array(
            'Id' => 2609,
            'Label' => 'Minolta AF 600mm F4 HS-APO G',
        ),
        2612 => array(
            'Id' => 2612,
            'Label' => 'Minolta AF 200mm F2.8 HS-APO G',
        ),
        2613 => array(
            'Id' => 2613,
            'Label' => 'Minolta AF 50mm F1.7 New',
        ),
        2615 => array(
            'Id' => 2615,
            'Label' => 'Minolta AF 28-105mm F3.5-4.5 xi',
        ),
        2616 => array(
            'Id' => 2616,
            'Label' => 'Minolta AF 35-200mm F4.5-5.6 xi',
        ),
        2618 => array(
            'Id' => 2618,
            'Label' => 'Minolta AF 28-80mm F4-5.6 xi',
        ),
        2619 => array(
            'Id' => 2619,
            'Label' => 'Minolta AF 80-200mm F4.5-5.6 xi',
        ),
        2620 => array(
            'Id' => 2620,
            'Label' => 'Minolta AF 28-70mm F2.8 G',
        ),
        2621 => array(
            'Id' => 2621,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6 xi',
        ),
        2624 => array(
            'Id' => 2624,
            'Label' => 'Minolta AF 35-80mm F4-5.6 Power Zoom',
        ),
        2628 => array(
            'Id' => 2628,
            'Label' => 'Minolta AF 80-200mm F2.8 HS-APO G',
        ),
        2629 => array(
            'Id' => 2629,
            'Label' => 'Minolta AF 85mm F1.4 New',
        ),
        2631 => array(
            'Id' => 2631,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6 APO',
        ),
        2632 => array(
            'Id' => 2632,
            'Label' => 'Minolta AF 24-50mm F4 New',
        ),
        2638 => array(
            'Id' => 2638,
            'Label' => 'Minolta AF 50mm F2.8 Macro New',
        ),
        2639 => array(
            'Id' => 2639,
            'Label' => 'Minolta AF 100mm F2.8 Macro',
        ),
        2641 => array(
            'Id' => 2641,
            'Label' => 'Minolta/Sony AF 20mm F2.8 New',
        ),
        2642 => array(
            'Id' => 2642,
            'Label' => 'Minolta AF 24mm F2.8 New',
        ),
        2644 => array(
            'Id' => 2644,
            'Label' => 'Minolta AF 100-400mm F4.5-6.7 APO',
        ),
        2662 => array(
            'Id' => 2662,
            'Label' => 'Minolta AF 50mm F1.4 New',
        ),
        2667 => array(
            'Id' => 2667,
            'Label' => 'Minolta AF 35mm F2 New',
        ),
        2668 => array(
            'Id' => 2668,
            'Label' => 'Minolta AF 28mm F2 New',
        ),
        2672 => array(
            'Id' => 2672,
            'Label' => 'Minolta AF 24-105mm F3.5-4.5 (D)',
        ),
        3046 => array(
            'Id' => 3046,
            'Label' => 'Metabones Canon EF Speed Booster',
        ),
        4567 => array(
            'Id' => 4567,
            'Label' => 'Tokina 70-210mm F4-5.6',
        ),
        4568 => array(
            'Id' => 4568,
            'Label' => 'Tokina AF 35-200mm F4-5.6 Zoom SD',
        ),
        4570 => array(
            'Id' => 4570,
            'Label' => 'Tamron AF 35-135mm F3.5-4.5',
        ),
        4571 => array(
            'Id' => 4571,
            'Label' => 'Vivitar 70-210mm F4.5-5.6',
        ),
        4574 => array(
            'Id' => 4574,
            'Label' => '2x Teleconverter or Tamron or Tokina Lens',
        ),
        '4574.1' => array(
            'Id' => '4574.1',
            'Label' => 'Tamron SP AF 90mm F2.5',
        ),
        '4574.2' => array(
            'Id' => '4574.2',
            'Label' => 'Tokina RF 500mm F8.0 x2',
        ),
        '4574.3' => array(
            'Id' => '4574.3',
            'Label' => 'Tokina 300mm F2.8 x2',
        ),
        4575 => array(
            'Id' => 4575,
            'Label' => '1.4x Teleconverter',
        ),
        4585 => array(
            'Id' => 4585,
            'Label' => 'Tamron SP AF 300mm F2.8 LD IF',
        ),
        4586 => array(
            'Id' => 4586,
            'Label' => 'Tamron SP AF 35-105mm F2.8 LD Aspherical IF',
        ),
        4587 => array(
            'Id' => 4587,
            'Label' => 'Tamron AF 70-210mm F2.8 SP LD',
        ),
        4812 => array(
            'Id' => 4812,
            'Label' => 'Metabones Canon EF Speed Booster Ultra',
        ),
        6118 => array(
            'Id' => 6118,
            'Label' => 'Canon EF Adapter',
        ),
        6528 => array(
            'Id' => 6528,
            'Label' => 'Sigma 16mm F2.8 Filtermatic Fisheye',
        ),
        6553 => array(
            'Id' => 6553,
            'Label' => 'E-Mount, T-Mount, Other Lens or no lens',
        ),
        '6553.1' => array(
            'Id' => '6553.1',
            'Label' => 'Arax MC 35mm F2.8 Tilt+Shift',
        ),
        '6553.2' => array(
            'Id' => '6553.2',
            'Label' => 'Arax MC 80mm F2.8 Tilt+Shift',
        ),
        '6553.3' => array(
            'Id' => '6553.3',
            'Label' => 'Zenitar MF 16mm F2.8 Fisheye M42',
        ),
        '6553.4' => array(
            'Id' => '6553.4',
            'Label' => 'Samyang 500mm Mirror F8.0',
        ),
        '6553.5' => array(
            'Id' => '6553.5',
            'Label' => 'Pentacon Auto 135mm F2.8',
        ),
        '6553.6' => array(
            'Id' => '6553.6',
            'Label' => 'Pentacon Auto 29mm F2.8',
        ),
        '6553.7' => array(
            'Id' => '6553.7',
            'Label' => 'Helios 44-2 58mm F2.0',
        ),
        18688 => array(
            'Id' => 18688,
            'Label' => 'Sigma MC-11 SA-E Mount Converter with not-supported Sigma lens',
        ),
        25501 => array(
            'Id' => 25501,
            'Label' => 'Minolta AF 50mm F1.7',
        ),
        25511 => array(
            'Id' => 25511,
            'Label' => 'Minolta AF 35-70mm F4 or Other Lens',
        ),
        '25511.1' => array(
            'Id' => '25511.1',
            'Label' => 'Sigma UC AF 28-70mm F3.5-4.5',
        ),
        '25511.2' => array(
            'Id' => '25511.2',
            'Label' => 'Sigma AF 28-70mm F2.8',
        ),
        '25511.3' => array(
            'Id' => '25511.3',
            'Label' => 'Sigma M-AF 70-200mm F2.8 EX Aspherical',
        ),
        '25511.4' => array(
            'Id' => '25511.4',
            'Label' => 'Quantaray M-AF 35-80mm F4-5.6',
        ),
        '25511.5' => array(
            'Id' => '25511.5',
            'Label' => 'Tokina 28-70mm F2.8-4.5 AF',
        ),
        25521 => array(
            'Id' => 25521,
            'Label' => 'Minolta AF 28-85mm F3.5-4.5 or Other Lens',
        ),
        '25521.1' => array(
            'Id' => '25521.1',
            'Label' => 'Tokina 19-35mm F3.5-4.5',
        ),
        '25521.2' => array(
            'Id' => '25521.2',
            'Label' => 'Tokina 28-70mm F2.8 AT-X',
        ),
        '25521.3' => array(
            'Id' => '25521.3',
            'Label' => 'Tokina 80-400mm F4.5-5.6 AT-X AF II 840',
        ),
        '25521.4' => array(
            'Id' => '25521.4',
            'Label' => 'Tokina AF PRO 28-80mm F2.8 AT-X 280',
        ),
        '25521.5' => array(
            'Id' => '25521.5',
            'Label' => 'Tokina AT-X PRO [II] AF 28-70mm F2.6-2.8 270',
        ),
        '25521.6' => array(
            'Id' => '25521.6',
            'Label' => 'Tamron AF 19-35mm F3.5-4.5',
        ),
        '25521.7' => array(
            'Id' => '25521.7',
            'Label' => 'Angenieux AF 28-70mm F2.6',
        ),
        '25521.8' => array(
            'Id' => '25521.8',
            'Label' => 'Tokina AT-X 17 AF 17mm F3.5',
        ),
        '25521.9' => array(
            'Id' => '25521.9',
            'Label' => 'Tokina 20-35mm F3.5-4.5 II AF',
        ),
        25531 => array(
            'Id' => 25531,
            'Label' => 'Minolta AF 28-135mm F4-4.5 or Other Lens',
        ),
        '25531.1' => array(
            'Id' => '25531.1',
            'Label' => 'Sigma ZOOM-alpha 35-135mm F3.5-4.5',
        ),
        '25531.2' => array(
            'Id' => '25531.2',
            'Label' => 'Sigma 28-105mm F2.8-4 Aspherical',
        ),
        '25531.3' => array(
            'Id' => '25531.3',
            'Label' => 'Sigma 28-105mm F4-5.6 UC',
        ),
        '25531.4' => array(
            'Id' => '25531.4',
            'Label' => 'Tokina AT-X 242 AF 24-200mm F3.5-5.6',
        ),
        25541 => array(
            'Id' => 25541,
            'Label' => 'Minolta AF 35-105mm F3.5-4.5',
        ),
        25551 => array(
            'Id' => 25551,
            'Label' => 'Minolta AF 70-210mm F4 Macro or Sigma Lens',
        ),
        '25551.1' => array(
            'Id' => '25551.1',
            'Label' => 'Sigma 70-210mm F4-5.6 APO',
        ),
        '25551.2' => array(
            'Id' => '25551.2',
            'Label' => 'Sigma M-AF 70-200mm F2.8 EX APO',
        ),
        '25551.3' => array(
            'Id' => '25551.3',
            'Label' => 'Sigma 75-200mm F2.8-3.5',
        ),
        25561 => array(
            'Id' => 25561,
            'Label' => 'Minolta AF 135mm F2.8',
        ),
        25571 => array(
            'Id' => 25571,
            'Label' => 'Minolta/Sony AF 28mm F2.8',
        ),
        25581 => array(
            'Id' => 25581,
            'Label' => 'Minolta AF 24-50mm F4',
        ),
        25601 => array(
            'Id' => 25601,
            'Label' => 'Minolta AF 100-200mm F4.5',
        ),
        25611 => array(
            'Id' => 25611,
            'Label' => 'Minolta AF 75-300mm F4.5-5.6 or Sigma Lens',
        ),
        '25611.1' => array(
            'Id' => '25611.1',
            'Label' => 'Sigma 70-300mm F4-5.6 DL Macro',
        ),
        '25611.2' => array(
            'Id' => '25611.2',
            'Label' => 'Sigma 300mm F4 APO Macro',
        ),
        '25611.3' => array(
            'Id' => '25611.3',
            'Label' => 'Sigma AF 500mm F4.5 APO',
        ),
        '25611.4' => array(
            'Id' => '25611.4',
            'Label' => 'Sigma AF 170-500mm F5-6.3 APO Aspherical',
        ),
        '25611.5' => array(
            'Id' => '25611.5',
            'Label' => 'Tokina AT-X AF 300mm F4',
        ),
        '25611.6' => array(
            'Id' => '25611.6',
            'Label' => 'Tokina AT-X AF 400mm F5.6 SD',
        ),
        '25611.7' => array(
            'Id' => '25611.7',
            'Label' => 'Tokina AF 730 II 75-300mm F4.5-5.6',
        ),
        '25611.8' => array(
            'Id' => '25611.8',
            'Label' => 'Sigma 800mm F5.6 APO',
        ),
        '25611.9' => array(
            'Id' => '25611.9',
            'Label' => 'Sigma AF 400mm F5.6 APO Macro',
        ),
        '25611.10' => array(
            'Id' => '25611.10',
            'Label' => 'Sigma 1000mm F8 APO',
        ),
        25621 => array(
            'Id' => 25621,
            'Label' => 'Minolta AF 50mm F1.4 [New]',
        ),
        25631 => array(
            'Id' => 25631,
            'Label' => 'Minolta AF 300mm F2.8 APO or Sigma Lens',
        ),
        '25631.1' => array(
            'Id' => '25631.1',
            'Label' => 'Sigma AF 50-500mm F4-6.3 EX DG APO',
        ),
        '25631.2' => array(
            'Id' => '25631.2',
            'Label' => 'Sigma AF 170-500mm F5-6.3 APO Aspherical',
        ),
        '25631.3' => array(
            'Id' => '25631.3',
            'Label' => 'Sigma AF 500mm F4.5 EX DG APO',
        ),
        '25631.4' => array(
            'Id' => '25631.4',
            'Label' => 'Sigma 400mm F5.6 APO',
        ),
        25641 => array(
            'Id' => 25641,
            'Label' => 'Minolta AF 50mm F2.8 Macro or Sigma Lens',
        ),
        '25641.1' => array(
            'Id' => '25641.1',
            'Label' => 'Sigma 50mm F2.8 EX Macro',
        ),
        25651 => array(
            'Id' => 25651,
            'Label' => 'Minolta AF 600mm F4 APO',
        ),
        25661 => array(
            'Id' => 25661,
            'Label' => 'Minolta AF 24mm F2.8 or Sigma Lens',
        ),
        '25661.1' => array(
            'Id' => '25661.1',
            'Label' => 'Sigma 17-35mm F2.8-4 EX Aspherical',
        ),
        25721 => array(
            'Id' => 25721,
            'Label' => 'Minolta/Sony AF 500mm F8 Reflex',
        ),
        25781 => array(
            'Id' => 25781,
            'Label' => 'Minolta/Sony AF 16mm F2.8 Fisheye or Sigma Lens',
        ),
        '25781.1' => array(
            'Id' => '25781.1',
            'Label' => 'Sigma 8mm F4 EX [DG] Fisheye',
        ),
        '25781.2' => array(
            'Id' => '25781.2',
            'Label' => 'Sigma 14mm F3.5',
        ),
        '25781.3' => array(
            'Id' => '25781.3',
            'Label' => 'Sigma 15mm F2.8 Fisheye',
        ),
        25791 => array(
            'Id' => 25791,
            'Label' => 'Minolta/Sony AF 20mm F2.8 or Tokina Lens',
        ),
        '25791.1' => array(
            'Id' => '25791.1',
            'Label' => 'Tokina AT-X Pro DX 11-16mm F2.8',
        ),
        25811 => array(
            'Id' => 25811,
            'Label' => 'Minolta AF 100mm F2.8 Macro [New] or Sigma or Tamron Lens',
        ),
        '25811.1' => array(
            'Id' => '25811.1',
            'Label' => 'Sigma AF 90mm F2.8 Macro',
        ),
        '25811.2' => array(
            'Id' => '25811.2',
            'Label' => 'Sigma AF 105mm F2.8 EX [DG] Macro',
        ),
        '25811.3' => array(
            'Id' => '25811.3',
            'Label' => 'Sigma 180mm F5.6 Macro',
        ),
        '25811.4' => array(
            'Id' => '25811.4',
            'Label' => 'Sigma 180mm F3.5 EX DG Macro',
        ),
        '25811.5' => array(
            'Id' => '25811.5',
            'Label' => 'Tamron 90mm F2.8 Macro',
        ),
        25851 => array(
            'Id' => 25851,
            'Label' => 'Beroflex 35-135mm F3.5-4.5',
        ),
        25858 => array(
            'Id' => 25858,
            'Label' => 'Minolta AF 35-105mm F3.5-4.5 New or Tamron Lens',
        ),
        '25858.1' => array(
            'Id' => '25858.1',
            'Label' => 'Tamron 24-135mm F3.5-5.6',
        ),
        25881 => array(
            'Id' => 25881,
            'Label' => 'Minolta AF 70-210mm F3.5-4.5',
        ),
        25891 => array(
            'Id' => 25891,
            'Label' => 'Minolta AF 80-200mm F2.8 APO or Tokina Lens',
        ),
        '25891.1' => array(
            'Id' => '25891.1',
            'Label' => 'Tokina 80-200mm F2.8',
        ),
        25901 => array(
            'Id' => 25901,
            'Label' => 'Minolta AF 200mm F2.8 G APO + Minolta AF 1.4x APO or Other Lens + 1.4x',
        ),
        '25901.1' => array(
            'Id' => '25901.1',
            'Label' => 'Minolta AF 600mm F4 HS-APO G + Minolta AF 1.4x APO',
        ),
        25911 => array(
            'Id' => 25911,
            'Label' => 'Minolta AF 35mm F1.4',
        ),
        25921 => array(
            'Id' => 25921,
            'Label' => 'Minolta AF 85mm F1.4 G (D)',
        ),
        25931 => array(
            'Id' => 25931,
            'Label' => 'Minolta AF 200mm F2.8 APO',
        ),
        25941 => array(
            'Id' => 25941,
            'Label' => 'Minolta AF 3x-1x F1.7-2.8 Macro',
        ),
        25961 => array(
            'Id' => 25961,
            'Label' => 'Minolta AF 28mm F2',
        ),
        25971 => array(
            'Id' => 25971,
            'Label' => 'Minolta AF 35mm F2 [New]',
        ),
        25981 => array(
            'Id' => 25981,
            'Label' => 'Minolta AF 100mm F2',
        ),
        26011 => array(
            'Id' => 26011,
            'Label' => 'Minolta AF 200mm F2.8 G APO + Minolta AF 2x APO or Other Lens + 2x',
        ),
        '26011.1' => array(
            'Id' => '26011.1',
            'Label' => 'Minolta AF 600mm F4 HS-APO G + Minolta AF 2x APO',
        ),
        26041 => array(
            'Id' => 26041,
            'Label' => 'Minolta AF 80-200mm F4.5-5.6',
        ),
        26051 => array(
            'Id' => 26051,
            'Label' => 'Minolta AF 35-80mm F4-5.6',
        ),
        26061 => array(
            'Id' => 26061,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6',
        ),
        26071 => array(
            'Id' => 26071,
            'Label' => 'Minolta AF 35-80mm F4-5.6',
        ),
        26081 => array(
            'Id' => 26081,
            'Label' => 'Minolta AF 300mm F2.8 HS-APO G',
        ),
        26091 => array(
            'Id' => 26091,
            'Label' => 'Minolta AF 600mm F4 HS-APO G',
        ),
        26121 => array(
            'Id' => 26121,
            'Label' => 'Minolta AF 200mm F2.8 HS-APO G',
        ),
        26131 => array(
            'Id' => 26131,
            'Label' => 'Minolta AF 50mm F1.7 New',
        ),
        26151 => array(
            'Id' => 26151,
            'Label' => 'Minolta AF 28-105mm F3.5-4.5 xi',
        ),
        26161 => array(
            'Id' => 26161,
            'Label' => 'Minolta AF 35-200mm F4.5-5.6 xi',
        ),
        26181 => array(
            'Id' => 26181,
            'Label' => 'Minolta AF 28-80mm F4-5.6 xi',
        ),
        26191 => array(
            'Id' => 26191,
            'Label' => 'Minolta AF 80-200mm F4.5-5.6 xi',
        ),
        26201 => array(
            'Id' => 26201,
            'Label' => 'Minolta AF 28-70mm F2.8 G',
        ),
        26211 => array(
            'Id' => 26211,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6 xi',
        ),
        26241 => array(
            'Id' => 26241,
            'Label' => 'Minolta AF 35-80mm F4-5.6 Power Zoom',
        ),
        26281 => array(
            'Id' => 26281,
            'Label' => 'Minolta AF 80-200mm F2.8 HS-APO G',
        ),
        26291 => array(
            'Id' => 26291,
            'Label' => 'Minolta AF 85mm F1.4 New',
        ),
        26311 => array(
            'Id' => 26311,
            'Label' => 'Minolta AF 100-300mm F4.5-5.6 APO',
        ),
        26321 => array(
            'Id' => 26321,
            'Label' => 'Minolta AF 24-50mm F4 New',
        ),
        26381 => array(
            'Id' => 26381,
            'Label' => 'Minolta AF 50mm F2.8 Macro New',
        ),
        26391 => array(
            'Id' => 26391,
            'Label' => 'Minolta AF 100mm F2.8 Macro',
        ),
        26411 => array(
            'Id' => 26411,
            'Label' => 'Minolta/Sony AF 20mm F2.8 New',
        ),
        26421 => array(
            'Id' => 26421,
            'Label' => 'Minolta AF 24mm F2.8 New',
        ),
        26441 => array(
            'Id' => 26441,
            'Label' => 'Minolta AF 100-400mm F4.5-6.7 APO',
        ),
        26621 => array(
            'Id' => 26621,
            'Label' => 'Minolta AF 50mm F1.4 New',
        ),
        26671 => array(
            'Id' => 26671,
            'Label' => 'Minolta AF 35mm F2 New',
        ),
        26681 => array(
            'Id' => 26681,
            'Label' => 'Minolta AF 28mm F2 New',
        ),
        26721 => array(
            'Id' => 26721,
            'Label' => 'Minolta AF 24-105mm F3.5-4.5 (D)',
        ),
        30464 => array(
            'Id' => 30464,
            'Label' => 'Metabones Canon EF Speed Booster',
        ),
        45671 => array(
            'Id' => 45671,
            'Label' => 'Tokina 70-210mm F4-5.6',
        ),
        45681 => array(
            'Id' => 45681,
            'Label' => 'Tokina AF 35-200mm F4-5.6 Zoom SD',
        ),
        45701 => array(
            'Id' => 45701,
            'Label' => 'Tamron AF 35-135mm F3.5-4.5',
        ),
        45711 => array(
            'Id' => 45711,
            'Label' => 'Vivitar 70-210mm F4.5-5.6',
        ),
        45741 => array(
            'Id' => 45741,
            'Label' => '2x Teleconverter or Tamron or Tokina Lens',
        ),
        '45741.1' => array(
            'Id' => '45741.1',
            'Label' => 'Tamron SP AF 90mm F2.5',
        ),
        '45741.2' => array(
            'Id' => '45741.2',
            'Label' => 'Tokina RF 500mm F8.0 x2',
        ),
        '45741.3' => array(
            'Id' => '45741.3',
            'Label' => 'Tokina 300mm F2.8 x2',
        ),
        45751 => array(
            'Id' => 45751,
            'Label' => '1.4x Teleconverter',
        ),
        45851 => array(
            'Id' => 45851,
            'Label' => 'Tamron SP AF 300mm F2.8 LD IF',
        ),
        45861 => array(
            'Id' => 45861,
            'Label' => 'Tamron SP AF 35-105mm F2.8 LD Aspherical IF',
        ),
        45871 => array(
            'Id' => 45871,
            'Label' => 'Tamron AF 70-210mm F2.8 SP LD',
        ),
        48128 => array(
            'Id' => 48128,
            'Label' => 'Metabones Canon EF Speed Booster Ultra',
        ),
        61184 => array(
            'Id' => 61184,
            'Label' => 'Canon EF Adapter',
        ),
        65280 => array(
            'Id' => 65280,
            'Label' => 'Sigma 16mm F2.8 Filtermatic Fisheye',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'E-Mount, T-Mount, Other Lens or no lens',
        ),
        '65535.1' => array(
            'Id' => '65535.1',
            'Label' => 'Arax MC 35mm F2.8 Tilt+Shift',
        ),
        '65535.2' => array(
            'Id' => '65535.2',
            'Label' => 'Arax MC 80mm F2.8 Tilt+Shift',
        ),
        '65535.3' => array(
            'Id' => '65535.3',
            'Label' => 'Zenitar MF 16mm F2.8 Fisheye M42',
        ),
        '65535.4' => array(
            'Id' => '65535.4',
            'Label' => 'Samyang 500mm Mirror F8.0',
        ),
        '65535.5' => array(
            'Id' => '65535.5',
            'Label' => 'Pentacon Auto 135mm F2.8',
        ),
        '65535.6' => array(
            'Id' => '65535.6',
            'Label' => 'Pentacon Auto 29mm F2.8',
        ),
        '65535.7' => array(
            'Id' => '65535.7',
            'Label' => 'Helios 44-2 58mm F2.0',
        ),
    );

}
