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
class PictureControlMode extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:PictureControlMode';

  protected string $name = 'PictureControlMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Control Mode',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::PictureCtrl
       * line : 211559
       * type : string
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'NikonCapture::PictureCtrl.NikonCapture:PictureControlMode',
      'desc' => [
        'en' => 'Picture Control Mode',
      ],
    ],
  ];

}
