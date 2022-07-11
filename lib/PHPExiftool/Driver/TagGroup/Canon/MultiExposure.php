<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultiExposure extends AbstractTagGroup
{

  protected string $id = 'Canon:MultiExposure';

  protected string $name = 'MultiExposure';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Multi Exposure',
    'fr' => 'Infos Surimpression',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::MultiExp
       * line : 66916
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::MultiExp.Canon:MultiExposure',
      'desc' => [
        'en' => 'Multi Exposure',
        'fr' => 'Infos Surimpression',
      ],
    ],
  ];

}
