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
class TagsList extends AbstractTagGroup
{

  protected string $id = 'XMP-digiKam:TagsList';

  protected string $name = 'TagsList';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tags List',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::digiKam
       * line : 405401
       * type : string
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::digiKam.XMP-digiKam:TagsList',
      'desc' => [
        'en' => 'Tags List',
      ],
    ],
  ];

}
