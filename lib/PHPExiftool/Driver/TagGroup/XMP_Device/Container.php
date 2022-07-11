<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Container extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:Container';

  protected string $name = 'Container';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Container',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397012
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::Device.XMP-Device:Container',
      'desc' => [
        'en' => 'Container',
      ],
    ],
  ];

}
