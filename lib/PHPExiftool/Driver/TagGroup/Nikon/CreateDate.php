<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreateDate extends AbstractTagGroup
{

  protected string $id = 'Nikon:CreateDate';

  protected string $name = 'CreateDate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Create Date',
    'fr' => 'Date de la création des données numériques',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 192057
       * type : string
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:CreateDate',
      'desc' => [
        'en' => 'Create Date',
        'fr' => 'Date de la création des données numériques',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202509
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:CreateDate',
      'desc' => [
        'en' => 'Create Date',
        'fr' => 'Date de la création des données numériques',
      ],
    ],
  ];

}
