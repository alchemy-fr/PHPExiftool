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
class WhitePointY extends AbstractTagGroup
{

  protected string $id = 'PNG:WhitePointY';

  protected string $name = 'WhitePointY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'White Point Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::PrimaryChromaticities
       * line : 273048
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::PrimaryChromaticities.PNG:WhitePointY',
      'desc' => [
        'en' => 'White Point Y',
      ],
    ],
  ];

}
