<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_acdsee;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginatingProgram extends AbstractTagGroup
{

  protected string $id = 'XMP-acdsee:OriginatingProgram';

  protected string $name = 'OriginatingProgram';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Originating Program',
    'fr' => 'Programme d\'origine',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::acdsee
       * line : 398163
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::acdsee.XMP-acdsee:OriginatingProgram',
      'desc' => [
        'en' => 'Originating Program',
        'fr' => 'Programme d\'origine',
      ],
    ],
  ];

}
