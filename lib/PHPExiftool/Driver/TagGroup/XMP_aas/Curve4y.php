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
class Curve4y extends AbstractTagGroup
{

  protected string $id = 'XMP-aas:Curve4y';

  protected string $name = 'Curve4y';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Curve 4y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::aas
       * line : 398007
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::aas.XMP-aas:Curve4y',
      'desc' => [
        'en' => 'Curve 4y',
      ],
    ],
  ];

}
