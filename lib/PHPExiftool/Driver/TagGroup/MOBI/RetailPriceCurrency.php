<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetailPriceCurrency extends AbstractTagGroup
{

  protected string $id = 'MOBI:RetailPriceCurrency';

  protected string $name = 'RetailPriceCurrency';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Retail Price Currency',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273893
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::EXTH.MOBI:RetailPriceCurrency',
      'desc' => [
        'en' => 'Retail Price Currency',
      ],
    ],
  ];

}
