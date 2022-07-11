<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pur;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OptionEndDate extends AbstractTagGroup
{

  protected string $id = 'XMP-pur:OptionEndDate';

  protected string $name = 'OptionEndDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Option End Date',
  ];

  protected int $count = 0;

  protected int $flags = 321;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::pur
       * line : 411663
       * type : date
       * writable : true
       * count : 
       * flags : Avoid,Bag,List
       */
      'id' => 'XMP::pur.XMP-pur:OptionEndDate',
      'desc' => [
        'en' => 'Option End Date',
      ],
    ],
  ];

}
