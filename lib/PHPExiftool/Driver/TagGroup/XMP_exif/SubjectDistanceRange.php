<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectDistanceRange extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:SubjectDistanceRange';

  protected string $name = 'SubjectDistanceRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subject Distance Range',
    'fr' => 'Intervalle de distance du sujet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408613
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:SubjectDistanceRange',
      'desc' => [
        'en' => 'Subject Distance Range',
        'fr' => 'Intervalle de distance du sujet',
      ],
    ],
  ];

}
