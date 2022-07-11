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
class RedEyeCorrection extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:RedEyeCorrection';

  protected string $name = 'RedEyeCorrection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Red Eye Correction',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::RedEyeData
       * line : 211602
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::RedEyeData.NikonCapture:RedEyeCorrection',
      'desc' => [
        'en' => 'Red Eye Correction',
      ],
    ],
  ];

}
