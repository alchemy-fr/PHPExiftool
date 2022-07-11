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
class Unsharp4Color extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:Unsharp4Color';

  protected string $name = 'Unsharp4Color';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unsharp 4 Color',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::UnsharpData
       * line : 211848
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::UnsharpData.NikonCapture:Unsharp4Color',
      'desc' => [
        'en' => 'Unsharp 4 Color',
      ],
    ],
  ];

}
