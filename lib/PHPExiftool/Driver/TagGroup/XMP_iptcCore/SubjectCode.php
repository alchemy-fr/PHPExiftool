<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectCode extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcCore:SubjectCode';

  protected string $name = 'SubjectCode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subject Code',
    'fr' => 'Code sujet',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcCore
       * line : 409392
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::iptcCore.XMP-iptcCore:SubjectCode',
      'desc' => [
        'en' => 'Subject Code',
        'fr' => 'Code sujet',
      ],
    ],
  ];

}
