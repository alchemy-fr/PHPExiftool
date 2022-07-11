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
class SamplerData extends AbstractTagGroup
{

  protected string $id = 'RIFF:SamplerData';

  protected string $name = 'SamplerData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sampler Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Sampler
       * line : 329084
       * type : undef
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'RIFF::Sampler.RIFF:SamplerData',
      'desc' => [
        'en' => 'Sampler Data',
      ],
    ],
  ];

}
