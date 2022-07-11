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
class NominalFrameCount extends AbstractTagGroup
{

  protected string $id = 'MNG:NominalFrameCount';

  protected string $name = 'NominalFrameCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Nominal Frame Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::MNGHeader
       * line : 165441
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::MNGHeader.MNG:NominalFrameCount',
      'desc' => [
        'en' => 'Nominal Frame Count',
      ],
    ],
  ];

}
