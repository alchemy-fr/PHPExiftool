<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{

  protected string $id = 'GIMP:ColorMode';

  protected string $name = 'ColorMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Mode',
    'fr' => 'Mode colorimétrique',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Header
       * line : 131845
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Header.GIMP:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
  ];

}
