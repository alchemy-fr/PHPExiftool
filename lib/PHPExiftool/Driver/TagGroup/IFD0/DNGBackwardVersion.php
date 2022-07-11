<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DNGBackwardVersion extends AbstractTagGroup
{

  protected string $id = 'IFD0:DNGBackwardVersion';

  protected string $name = 'DNGBackwardVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DNG Backward Version',
    'fr' => 'Version DNG antérieure',
  ];

  protected int $count = 4;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119167
       * type : int8u
       * writable : true
       * count : 4
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:DNGBackwardVersion',
      'desc' => [
        'en' => 'DNG Backward Version',
        'fr' => 'Version DNG antérieure',
      ],
    ],
  ];

}
