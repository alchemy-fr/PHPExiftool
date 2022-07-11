<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreateDate extends AbstractTagGroup
{

  protected string $id = 'File:CreateDate';

  protected string $name = 'CreateDate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Create Date',
    'fr' => 'Date de la création des données numériques',
  ];

  protected int $count = 24;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 105676
       * type : string
       * writable : false
       * count : 24
       * flags : 
       */
      'id' => 'DPX::Main.File:CreateDate',
      'desc' => [
        'en' => 'Create Date',
        'fr' => 'Date de la création des données numériques',
      ],
    ],
  ];

}
