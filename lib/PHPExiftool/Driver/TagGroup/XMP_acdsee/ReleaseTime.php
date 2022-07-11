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
class ReleaseTime extends AbstractTagGroup
{

  protected string $id = 'XMP-acdsee:ReleaseTime';

  protected string $name = 'ReleaseTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Release Time',
    'fr' => 'Heure de version',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::acdsee
       * line : 398204
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::acdsee.XMP-acdsee:ReleaseTime',
      'desc' => [
        'en' => 'Release Time',
        'fr' => 'Heure de version',
      ],
    ],
  ];

}
