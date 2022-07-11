<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'Kodak:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Model',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $count = 42;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::MOV
       * line : 157914
       * type : string
       * writable : false
       * count : 42
       * flags : Permanent
       */
      'id' => 'Kodak::MOV.Kodak:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
