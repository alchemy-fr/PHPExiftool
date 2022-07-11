<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aas;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Highlights extends AbstractTagGroup
{

  protected string $id = 'XMP-aas:Highlights';

  protected string $name = 'Highlights';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Highlights',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::aas
       * line : 398027
       * type : real
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::aas.XMP-aas:Highlights',
      'desc' => [
        'en' => 'Highlights',
      ],
    ],
  ];

}
