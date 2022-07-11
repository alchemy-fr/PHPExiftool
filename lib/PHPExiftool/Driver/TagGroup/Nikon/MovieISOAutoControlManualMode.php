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
class MovieISOAutoControlManualMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:MovieISOAutoControlManualMode';

  protected string $name = 'MovieISOAutoControlManualMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Movie ISO Auto Control Manual Mode',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201727
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieISOAutoControlManualMode',
      'desc' => [
        'en' => 'Movie ISO Auto Control Manual Mode',
      ],
    ],
  ];

}
