<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorAppID extends AbstractTagGroup
{

  protected string $id = 'PSP:CreatorAppID';

  protected string $name = 'CreatorAppID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Creator App ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Creator
       * line : 273511
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PSP::Creator.PSP:CreatorAppID',
      'desc' => [
        'en' => 'Creator App ID',
      ],
    ],
  ];

}
