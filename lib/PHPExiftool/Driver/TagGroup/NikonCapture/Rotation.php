<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rotation extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:Rotation';

  protected string $name = 'Rotation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rotation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::Main
       * line : 211142
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::Main.NikonCapture:Rotation',
      'desc' => [
        'en' => 'Rotation',
      ],
    ],
  ];

}
