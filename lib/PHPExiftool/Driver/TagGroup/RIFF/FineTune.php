<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FineTune extends AbstractTagGroup
{

  protected string $id = 'RIFF:FineTune';

  protected string $name = 'FineTune';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Fine Tune',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Instrument
       * line : 328950
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Instrument.RIFF:FineTune',
      'desc' => [
        'en' => 'Fine Tune',
      ],
    ],
  ];

}
