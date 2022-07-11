<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Subject extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:Subject';

  protected string $name = 'Subject';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subject',
    'fr' => 'Sujet',
  ];

  protected int $count = 0;

  protected int $flags = 577;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414628
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,List,Seq
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:Subject',
      'desc' => [
        'en' => 'Subject',
        'fr' => 'Sujet',
      ],
    ],
  ];

}
