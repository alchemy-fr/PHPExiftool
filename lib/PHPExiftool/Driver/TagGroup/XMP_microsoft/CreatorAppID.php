<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorAppID extends AbstractTagGroup
{

  protected string $id = 'XMP-microsoft:CreatorAppID';

  protected string $name = 'CreatorAppID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creator App ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::XMP
       * line : 174675
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Microsoft::XMP.XMP-microsoft:CreatorAppID',
      'desc' => [
        'en' => 'Creator App ID',
      ],
    ],
  ];

}
