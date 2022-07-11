<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Palm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreateDate extends AbstractTagGroup
{

  protected string $id = 'Palm:CreateDate';

  protected string $name = 'CreateDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Create Date',
    'fr' => 'Date de la création des données numériques',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::Main
       * line : 274169
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::Main.Palm:CreateDate',
      'desc' => [
        'en' => 'Create Date',
        'fr' => 'Date de la création des données numériques',
      ],
    ],
  ];

}
