<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaximumOperationIndex extends AbstractTagGroup
{

  protected string $id = 'FlashPix:MaximumOperationIndex';

  protected string $name = 'MaximumOperationIndex';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Maximum Operation Index',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::GlobalInfo
       * line : 124978
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::GlobalInfo.FlashPix:MaximumOperationIndex',
      'desc' => [
        'en' => 'Maximum Operation Index',
      ],
    ],
  ];

}
