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
class ManageTo extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManageTo';

  protected string $name = 'ManageTo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Manage To',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414422
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManageTo',
      'desc' => [
        'en' => 'Manage To',
      ],
    ],
  ];

}
