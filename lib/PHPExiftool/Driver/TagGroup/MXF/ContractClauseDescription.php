<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContractClauseDescription extends AbstractTagGroup
{

  protected string $id = 'MXF:ContractClauseDescription';

  protected string $name = 'ContractClauseDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Contract Clause Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170237
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ContractClauseDescription',
      'desc' => [
        'en' => 'Contract Clause Description',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170994
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ContractClauseDescription',
      'desc' => [
        'en' => 'Contract Clause Description',
      ],
    ],
  ];

}
