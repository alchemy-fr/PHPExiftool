<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaximumObjectSize extends AbstractTagGroup
{

  protected string $id = 'IPTC:MaximumObjectSize';

  protected string $name = 'MaximumObjectSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Maximum Object Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::PreObjectData
       * line : 152313
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'IPTC::PreObjectData.IPTC:MaximumObjectSize',
      'desc' => [
        'en' => 'Maximum Object Size',
      ],
    ],
  ];

}
