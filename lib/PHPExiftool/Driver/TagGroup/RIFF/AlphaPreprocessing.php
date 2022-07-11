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
class AlphaPreprocessing extends AbstractTagGroup
{

  protected string $id = 'RIFF:AlphaPreprocessing';

  protected string $name = 'AlphaPreprocessing';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Alpha Preprocessing',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::ALPH
       * line : 327191
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::ALPH.RIFF:AlphaPreprocessing',
      'desc' => [
        'en' => 'Alpha Preprocessing',
      ],
    ],
  ];

}
