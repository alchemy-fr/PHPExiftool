<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContributedMediaDurationValue extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:ContributedMediaDurationValue';

  protected string $name = 'ContributedMediaDurationValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contributed Media Duration Value',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413352
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:ContributedMediaDurationValue',
      'desc' => [
        'en' => 'Contributed Media Duration Value',
      ],
    ],
  ];

}
