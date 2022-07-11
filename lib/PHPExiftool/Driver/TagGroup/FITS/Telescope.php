<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FITS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Telescope extends AbstractTagGroup
{

  protected string $id = 'FITS:Telescope';

  protected string $name = 'Telescope';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Telescope',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FITS::Main
       * line : 122060
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FITS::Main.FITS:Telescope',
      'desc' => [
        'en' => 'Telescope',
      ],
    ],
  ];

}
