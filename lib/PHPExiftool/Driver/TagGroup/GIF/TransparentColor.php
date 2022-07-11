<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TransparentColor extends AbstractTagGroup
{

  protected string $id = 'GIF:TransparentColor';

  protected string $name = 'TransparentColor';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Transparent Color',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::Main
       * line : 131705
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIF::Main.GIF:TransparentColor',
      'desc' => [
        'en' => 'Transparent Color',
      ],
    ],
  ];

}
