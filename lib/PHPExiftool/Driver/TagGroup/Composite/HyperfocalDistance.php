<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HyperfocalDistance extends AbstractTagGroup
{

  protected string $id = 'Composite:HyperfocalDistance';

  protected string $name = 'HyperfocalDistance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Hyperfocal Distance',
    'fr' => 'Distance hyperfocale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90370
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:HyperfocalDistance',
      'desc' => [
        'en' => 'Hyperfocal Distance',
        'fr' => 'Distance hyperfocale',
      ],
    ],
  ];

}
