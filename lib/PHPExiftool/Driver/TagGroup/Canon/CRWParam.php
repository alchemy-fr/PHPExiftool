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
class CRWParam extends AbstractTagGroup
{

  protected string $id = 'Canon:CRWParam';

  protected string $name = 'CRWParam';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CRW Param',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65983
       * type : undef
       * writable : false
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Canon::Main.Canon:CRWParam',
      'desc' => [
        'en' => 'CRW Param',
      ],
    ],
  ];

}
