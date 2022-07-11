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
class NoiseReductionParametersHost3MP extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:NoiseReductionParametersHost3MP';

  protected string $name = 'NoiseReductionParametersHost3MP';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Noise Reduction Parameters Host 3 MP',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157003
       * type : int16u
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:NoiseReductionParametersHost3MP',
      'desc' => [
        'en' => 'Noise Reduction Parameters Host 3 MP',
      ],
    ],
  ];

}
