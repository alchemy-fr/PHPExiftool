<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationData extends AbstractTagGroup
{

  protected string $id = 'AIFF:ApplicationData';

  protected string $name = 'ApplicationData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Application Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Main
       * line : 218
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Main.AIFF:ApplicationData',
      'desc' => [
        'en' => 'Application Data',
      ],
    ],
  ];

}
