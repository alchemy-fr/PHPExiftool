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
class Profiles extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:Profiles';

  protected string $name = 'Profiles';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profiles',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397134
       * type : struct
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::Device.XMP-Device:Profiles',
      'desc' => [
        'en' => 'Profiles',
      ],
    ],
  ];

}
