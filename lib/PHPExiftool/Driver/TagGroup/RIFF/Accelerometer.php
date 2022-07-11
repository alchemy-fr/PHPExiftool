<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Accelerometer extends AbstractTagGroup
{

  protected string $id = 'RIFF:Accelerometer';

  protected string $name = 'Accelerometer';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Accelerometer',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::UserText
       * line : 329211
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'RIFF::UserText.RIFF:Accelerometer',
      'desc' => [
        'en' => 'Accelerometer',
      ],
    ],
  ];

}
