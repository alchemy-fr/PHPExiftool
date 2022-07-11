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
class ManagedFromInstanceID extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManagedFromInstanceID';

  protected string $name = 'ManagedFromInstanceID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Managed From Instance ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414348
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManagedFromInstanceID',
      'desc' => [
        'en' => 'Managed From Instance ID',
      ],
    ],
  ];

}
