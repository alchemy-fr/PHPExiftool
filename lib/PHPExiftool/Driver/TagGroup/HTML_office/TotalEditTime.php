<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_office;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TotalEditTime extends AbstractTagGroup
{

  protected string $id = 'HTML-office:TotalEditTime';

  protected string $name = 'TotalEditTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Edit Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::Office
       * line : 143024
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::Office.HTML-office:TotalEditTime',
      'desc' => [
        'en' => 'Total Edit Time',
      ],
    ],
  ];

}
