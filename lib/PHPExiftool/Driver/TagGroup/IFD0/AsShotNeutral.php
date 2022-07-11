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
class AsShotNeutral extends AbstractTagGroup
{

  protected string $id = 'IFD0:AsShotNeutral';

  protected string $name = 'AsShotNeutral';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'As Shot Neutral',
    'fr' => 'Balance neutre à la prise de vue',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119450
       * type : rational64u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:AsShotNeutral',
      'desc' => [
        'en' => 'As Shot Neutral',
        'fr' => 'Balance neutre à la prise de vue',
      ],
    ],
  ];

}
