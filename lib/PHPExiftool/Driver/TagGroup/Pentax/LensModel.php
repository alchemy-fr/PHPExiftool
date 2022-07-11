<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensModel extends AbstractTagGroup
{

  protected string $id = 'Pentax:LensModel';

  protected string $name = 'LensModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Model',
    'fr' => 'Modèle d\'objectif',
  ];

  protected int $count = 30;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensInfoQ
       * line : 293791
       * type : string
       * writable : true
       * count : 30
       * flags : Permanent
       */
      'id' => 'Pentax::LensInfoQ.Pentax:LensModel',
      'desc' => [
        'en' => 'Lens Model',
        'fr' => 'Modèle d\'objectif',
      ],
    ],
  ];

}
