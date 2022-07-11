<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_sdc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AppVersion extends AbstractTagGroup
{

  protected string $id = 'XMP-sdc:AppVersion';

  protected string $name = 'AppVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'App Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::sdc
       * line : 210456
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::sdc.XMP-sdc:AppVersion',
      'desc' => [
        'en' => 'App Version',
      ],
    ],
  ];

}
