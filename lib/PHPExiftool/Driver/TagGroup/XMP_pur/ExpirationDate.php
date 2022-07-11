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
class ExpirationDate extends AbstractTagGroup
{

  protected string $id = 'XMP-pur:ExpirationDate';

  protected string $name = 'ExpirationDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Expiration Date',
    'fr' => 'Date d\'expiration',
  ];

  protected int $count = 0;

  protected int $flags = 321;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::pur
       * line : 411649
       * type : date
       * writable : true
       * count : 
       * flags : Avoid,Bag,List
       */
      'id' => 'XMP::pur.XMP-pur:ExpirationDate',
      'desc' => [
        'en' => 'Expiration Date',
        'fr' => 'Date d\'expiration',
      ],
    ],
  ];

}
