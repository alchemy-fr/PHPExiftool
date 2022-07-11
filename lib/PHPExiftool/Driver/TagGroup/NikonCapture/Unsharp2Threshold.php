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
class Unsharp2Threshold extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:Unsharp2Threshold';

  protected string $name = 'Unsharp2Threshold';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unsharp 2 Threshold',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::UnsharpData
       * line : 211774
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp2Threshold',
      'desc' => [
        'en' => 'Unsharp 2 Threshold',
      ],
    ],
  ];

}
