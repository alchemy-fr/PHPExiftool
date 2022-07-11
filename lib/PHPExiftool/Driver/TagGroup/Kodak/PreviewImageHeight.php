<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageHeight extends AbstractTagGroup
{

  protected string $id = 'Kodak:PreviewImageHeight';

  protected string $name = 'PreviewImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Height',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Scrn
       * line : 158882
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Scrn.Kodak:PreviewImageHeight',
      'desc' => [
        'en' => 'Preview Image Height',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 159275
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:PreviewImageHeight',
      'desc' => [
        'en' => 'Preview Image Height',
      ],
    ],
  ];

}
