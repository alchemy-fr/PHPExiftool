<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMatrixAdobeRGB extends AbstractTagGroup
{

  protected string $id = 'Samsung:ColorMatrixAdobeRGB';

  protected string $name = 'ColorMatrixAdobeRGB';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Matrix Adobe RGB',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335921
       * type : int32s
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:ColorMatrixAdobeRGB',
      'desc' => [
        'en' => 'Color Matrix Adobe RGB',
      ],
    ],
  ];

}
