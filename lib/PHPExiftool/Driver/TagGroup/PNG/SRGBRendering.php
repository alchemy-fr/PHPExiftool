<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SRGBRendering extends AbstractTagGroup
{

  protected string $id = 'PNG:SRGBRendering';

  protected string $name = 'SRGBRendering';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'SRGB Rendering',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::Main
       * line : 272949
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'PNG::Main.PNG:SRGBRendering',
      'desc' => [
        'en' => 'SRGB Rendering',
      ],
    ],
  ];

}
