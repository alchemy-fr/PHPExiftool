<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DiscardObjects extends AbstractTagGroup
{

  protected string $id = 'MNG:DiscardObjects';

  protected string $name = 'DiscardObjects';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Discard Objects',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::Main
       * line : 165542
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::Main.MNG:DiscardObjects',
      'desc' => [
        'en' => 'Discard Objects',
      ],
    ],
  ];

}
