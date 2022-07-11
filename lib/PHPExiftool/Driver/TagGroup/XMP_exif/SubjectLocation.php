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
class SubjectLocation extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:SubjectLocation';

  protected string $name = 'SubjectLocation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subject Location',
    'fr' => 'Zone du sujet',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408698
       * type : integer
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::exif.XMP-exif:SubjectLocation',
      'desc' => [
        'en' => 'Subject Location',
        'fr' => 'Zone du sujet',
      ],
    ],
  ];

}
