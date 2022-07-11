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
class Unsharp1Intensity extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:Unsharp1Intensity';

  protected string $name = 'Unsharp1Intensity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unsharp 1 Intensity',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::UnsharpData
       * line : 211695
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp1Intensity',
      'desc' => [
        'en' => 'Unsharp 1 Intensity',
      ],
    ],
  ];

}
