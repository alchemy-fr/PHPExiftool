<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlueX extends AbstractTagGroup
{

  protected string $id = 'PNG:BlueX';

  protected string $name = 'BlueX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Blue X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::PrimaryChromaticities
       * line : 273078
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::PrimaryChromaticities.PNG:BlueX',
      'desc' => [
        'en' => 'Blue X',
      ],
    ],
  ];

}
