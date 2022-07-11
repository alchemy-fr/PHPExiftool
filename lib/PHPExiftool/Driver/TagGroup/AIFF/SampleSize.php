<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleSize extends AbstractTagGroup
{

  protected string $id = 'AIFF:SampleSize';

  protected string $name = 'SampleSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sample Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Common
       * line : 101
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Common.AIFF:SampleSize',
      'desc' => [
        'en' => 'Sample Size',
      ],
    ],
  ];

}
