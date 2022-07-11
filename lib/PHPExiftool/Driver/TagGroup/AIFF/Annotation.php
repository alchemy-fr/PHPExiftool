<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Annotation extends AbstractTagGroup
{

  protected string $id = 'AIFF:Annotation';

  protected string $name = 'Annotation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Annotation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Main
       * line : 211
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Main.AIFF:Annotation',
      'desc' => [
        'en' => 'Annotation',
      ],
    ],
  ];

}
