<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BackgroundColor extends AbstractTagGroup
{

  protected string $id = 'MNG:BackgroundColor';

  protected string $name = 'BackgroundColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Background Color',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::Background
       * line : 164808
       * type : int16u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'MNG::Background.MNG:BackgroundColor',
      'desc' => [
        'en' => 'Background Color',
      ],
    ],
  ];

}
