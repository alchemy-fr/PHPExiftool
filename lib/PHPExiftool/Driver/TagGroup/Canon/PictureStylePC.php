<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureStylePC extends AbstractTagGroup
{

  protected string $id = 'Canon:PictureStylePC';

  protected string $name = 'PictureStylePC';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Style PC',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 66214
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:PictureStylePC',
      'desc' => [
        'en' => 'Picture Style PC',
      ],
    ],
  ];

}
