<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFFineTune extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFFineTune';

  protected string $name = 'AFFineTune';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Fine Tune',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFTune
       * line : 191405
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFTune.Nikon:AFFineTune',
      'desc' => [
        'en' => 'AF Fine Tune',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 202198
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:AFFineTune',
      'desc' => [
        'en' => 'AF Fine Tune',
      ],
    ],
  ];

}
