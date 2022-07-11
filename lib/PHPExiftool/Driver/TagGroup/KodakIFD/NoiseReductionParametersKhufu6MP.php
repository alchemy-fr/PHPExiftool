<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReductionParametersKhufu6MP extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:NoiseReductionParametersKhufu6MP';

  protected string $name = 'NoiseReductionParametersKhufu6MP';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Noise Reduction Parameters Khufu 6 MP',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156976
       * type : int16u
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:NoiseReductionParametersKhufu6MP',
      'desc' => [
        'en' => 'Noise Reduction Parameters Khufu 6 MP',
      ],
    ],
  ];

}
