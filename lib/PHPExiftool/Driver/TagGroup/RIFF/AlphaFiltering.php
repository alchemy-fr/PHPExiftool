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
class AlphaFiltering extends AbstractTagGroup
{

  protected string $id = 'RIFF:AlphaFiltering';

  protected string $name = 'AlphaFiltering';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Alpha Filtering',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::ALPH
       * line : 327202
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::ALPH.RIFF:AlphaFiltering',
      'desc' => [
        'en' => 'Alpha Filtering',
      ],
    ],
  ];

}
