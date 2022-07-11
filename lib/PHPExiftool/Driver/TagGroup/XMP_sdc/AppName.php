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
class AppName extends AbstractTagGroup
{

  protected string $id = 'XMP-sdc:AppName';

  protected string $name = 'AppName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'App Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::sdc
       * line : 210453
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::sdc.XMP-sdc:AppName',
      'desc' => [
        'en' => 'App Name',
      ],
    ],
  ];

}
