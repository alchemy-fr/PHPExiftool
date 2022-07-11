<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:ColorMode';

  protected string $name = 'ColorMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Mode',
    'fr' => 'Mode colorimétrique',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410503
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::photoshop.XMP-photoshop:ColorMode',
      'desc' => [
        'en' => 'Color Mode',
        'fr' => 'Mode colorimétrique',
      ],
    ],
  ];

}
