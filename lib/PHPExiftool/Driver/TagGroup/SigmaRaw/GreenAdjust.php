<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GreenAdjust extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:GreenAdjust';

  protected string $name = 'GreenAdjust';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Green Adjust',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::HeaderExt
       * line : 339908
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::HeaderExt.SigmaRaw:GreenAdjust',
      'desc' => [
        'en' => 'Green Adjust',
      ],
    ],
  ];

}
