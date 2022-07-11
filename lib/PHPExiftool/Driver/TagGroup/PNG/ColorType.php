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
class ColorType extends AbstractTagGroup
{

  protected string $id = 'PNG:ColorType';

  protected string $name = 'ColorType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::ImageHeader
       * line : 272778
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::ImageHeader.PNG:ColorType',
      'desc' => [
        'en' => 'Color Type',
      ],
    ],
  ];

}
