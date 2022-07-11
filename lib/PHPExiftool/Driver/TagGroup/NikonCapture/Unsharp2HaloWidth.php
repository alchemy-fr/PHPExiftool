<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Unsharp2HaloWidth extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:Unsharp2HaloWidth';

  protected string $name = 'Unsharp2HaloWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unsharp 2 Halo Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::UnsharpData
       * line : 211769
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp2HaloWidth',
      'desc' => [
        'en' => 'Unsharp 2 Halo Width',
      ],
    ],
  ];

}
