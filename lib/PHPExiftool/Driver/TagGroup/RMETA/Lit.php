<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RMETA;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Lit extends AbstractTagGroup
{

  protected string $id = 'RMETA:Lit';

  protected string $name = 'Lit';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lit',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::RMETA
       * line : 333976
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Ricoh::RMETA.RMETA:Lit',
      'desc' => [
        'en' => 'Lit',
      ],
    ],
  ];

}
