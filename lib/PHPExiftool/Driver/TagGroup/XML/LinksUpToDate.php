<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LinksUpToDate extends AbstractTagGroup
{

  protected string $id = 'XML:LinksUpToDate';

  protected string $name = 'LinksUpToDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Links Up To Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : OOXML::Main
       * line : 249506
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OOXML::Main.XML:LinksUpToDate',
      'desc' => [
        'en' => 'Links Up To Date',
      ],
    ],
  ];

}
