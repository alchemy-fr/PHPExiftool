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
class CreatorAppVersion extends AbstractTagGroup
{

  protected string $id = 'PSP:CreatorAppVersion';

  protected string $name = 'CreatorAppVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Creator App Version',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Creator
       * line : 273527
       * type : int8u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'PSP::Creator.PSP:CreatorAppVersion',
      'desc' => [
        'en' => 'Creator App Version',
      ],
    ],
  ];

}
