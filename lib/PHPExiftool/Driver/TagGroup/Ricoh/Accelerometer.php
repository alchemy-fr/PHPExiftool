<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Accelerometer extends AbstractTagGroup
{

  protected string $id = 'Ricoh:Accelerometer';

  protected string $name = 'Accelerometer';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Accelerometer',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::ThetaSubdir
       * line : 334168
       * type : rational64s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Ricoh::ThetaSubdir.Ricoh:Accelerometer',
      'desc' => [
        'en' => 'Accelerometer',
      ],
    ],
  ];

}
