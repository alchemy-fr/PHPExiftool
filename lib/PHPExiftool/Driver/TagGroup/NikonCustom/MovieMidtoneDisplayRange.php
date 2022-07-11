<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieMidtoneDisplayRange extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:MovieMidtoneDisplayRange';

  protected string $name = 'MovieMidtoneDisplayRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Movie Midtone Display Range',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 242795
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:MovieMidtoneDisplayRange',
      'desc' => [
        'en' => 'Movie Midtone Display Range',
      ],
    ],
  ];

}
