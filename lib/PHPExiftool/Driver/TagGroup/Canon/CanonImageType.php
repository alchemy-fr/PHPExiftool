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
class CanonImageType extends AbstractTagGroup
{

  protected string $id = 'Canon:CanonImageType';

  protected string $name = 'CanonImageType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Canon Image Type',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 64563
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:CanonImageType',
      'desc' => [
        'en' => 'Canon Image Type',
      ],
    ],
  ];

}
