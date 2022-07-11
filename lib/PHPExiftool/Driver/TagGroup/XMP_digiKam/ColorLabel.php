<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_digiKam;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorLabel extends AbstractTagGroup
{

  protected string $id = 'XMP-digiKam:ColorLabel';

  protected string $name = 'ColorLabel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Label',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::digiKam
       * line : 405358
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::digiKam.XMP-digiKam:ColorLabel',
      'desc' => [
        'en' => 'Color Label',
      ],
    ],
  ];

}
