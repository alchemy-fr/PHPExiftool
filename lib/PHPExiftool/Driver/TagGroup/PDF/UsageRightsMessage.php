<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UsageRightsMessage extends AbstractTagGroup
{

  protected string $id = 'PDF:UsageRightsMessage';

  protected string $name = 'UsageRightsMessage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Usage Rights Message',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::TransformParams
       * line : 264770
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::TransformParams.PDF:UsageRightsMessage',
      'desc' => [
        'en' => 'Usage Rights Message',
      ],
    ],
  ];

}
