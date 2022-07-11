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
class DateTime extends AbstractTagGroup
{

  protected string $id = 'XMP-acdsee:DateTime';

  protected string $name = 'DateTime';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Date Time',
    'fr' => 'Date de modification du fichier',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::acdsee
       * line : 398090
       * type : date
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::acdsee.XMP-acdsee:DateTime',
      'desc' => [
        'en' => 'Date Time',
        'fr' => 'Date de modification du fichier',
      ],
    ],
  ];

}
