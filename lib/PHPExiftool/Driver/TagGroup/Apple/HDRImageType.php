<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Apple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HDRImageType extends AbstractTagGroup
{

  protected string $id = 'Apple:HDRImageType';

  protected string $name = 'HDRImageType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'HDR Image Type',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Apple::Main
       * line : 2890
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Apple::Main.Apple:HDRImageType',
      'desc' => [
        'en' => 'HDR Image Type',
      ],
    ],
  ];

}
