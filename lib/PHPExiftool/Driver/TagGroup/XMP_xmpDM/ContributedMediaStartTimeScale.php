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
class ContributedMediaStartTimeScale extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:ContributedMediaStartTimeScale';

  protected string $name = 'ContributedMediaStartTimeScale';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contributed Media Start Time Scale',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413364
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:ContributedMediaStartTimeScale',
      'desc' => [
        'en' => 'Contributed Media Start Time Scale',
      ],
    ],
  ];

}
