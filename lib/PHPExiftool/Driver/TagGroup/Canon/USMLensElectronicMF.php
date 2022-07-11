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
class USMLensElectronicMF extends AbstractTagGroup
{

  protected string $id = 'Canon:USMLensElectronicMF';

  protected string $name = 'USMLensElectronicMF';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'USM Lens Electronic MF',
    'fr' => 'MF électronique à objectif USM',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFConfig
       * line : 3832
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFConfig.Canon:USMLensElectronicMF',
      'desc' => [
        'en' => 'USM Lens Electronic MF',
        'fr' => 'MF électronique à objectif USM',
      ],
    ],
  ];

}
