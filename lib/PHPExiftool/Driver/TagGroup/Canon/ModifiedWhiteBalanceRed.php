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
class ModifiedWhiteBalanceRed extends AbstractTagGroup
{

  protected string $id = 'Canon:ModifiedWhiteBalanceRed';

  protected string $name = 'ModifiedWhiteBalanceRed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Modified White Balance Red',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ModifiedInfo
       * line : 66543
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ModifiedInfo.Canon:ModifiedWhiteBalanceRed',
      'desc' => [
        'en' => 'Modified White Balance Red',
      ],
    ],
  ];

}
