<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BackgroundColor extends AbstractTagGroup
{

  protected string $id = 'RIFF:BackgroundColor';

  protected string $name = 'BackgroundColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Background Color',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::ANIM
       * line : 327234
       * type : int8u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'RIFF::ANIM.RIFF:BackgroundColor',
      'desc' => [
        'en' => 'Background Color',
      ],
    ],
  ];

}
