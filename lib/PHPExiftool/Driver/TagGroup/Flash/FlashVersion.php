<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashVersion extends AbstractTagGroup
{

  protected string $id = 'Flash:FlashVersion';

  protected string $name = 'FlashVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flash Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::Main
       * line : 124261
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Main.Flash:FlashVersion',
      'desc' => [
        'en' => 'Flash Version',
      ],
    ],
  ];

}
