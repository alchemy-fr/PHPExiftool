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
class Curve2x extends AbstractTagGroup
{

  protected string $id = 'XMP-aas:Curve2x';

  protected string $name = 'Curve2x';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Curve 2x',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::aas
       * line : 397987
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::aas.XMP-aas:Curve2x',
      'desc' => [
        'en' => 'Curve 2x',
      ],
    ],
  ];

}
