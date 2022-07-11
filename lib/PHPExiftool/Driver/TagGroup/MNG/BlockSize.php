<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlockSize extends AbstractTagGroup
{

  protected string $id = 'MNG:BlockSize';

  protected string $name = 'BlockSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Block Size',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::DeltaPNGHeader
       * line : 165168
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MNG::DeltaPNGHeader.MNG:BlockSize',
      'desc' => [
        'en' => 'Block Size',
      ],
    ],
  ];

}
