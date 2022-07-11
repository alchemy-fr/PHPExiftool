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
class DNGLensInfo extends AbstractTagGroup
{

  protected string $id = 'IFD0:DNGLensInfo';

  protected string $name = 'DNGLensInfo';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DNG Lens Info',
    'fr' => 'Distance focale minimale',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119528
       * type : rational64u
       * writable : true
       * count : 4
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:DNGLensInfo',
      'desc' => [
        'en' => 'DNG Lens Info',
        'fr' => 'Distance focale minimale',
      ],
    ],
  ];

}
