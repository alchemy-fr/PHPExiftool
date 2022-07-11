<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Camera;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorBalance extends AbstractTagGroup
{

  protected string $id = 'MIE-Camera:ColorBalance';

  protected string $name = 'ColorBalance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Balance',
    'fr' => 'Balance des couleurs',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Camera
       * line : 163157
       * type : rational64u
       * writable : true
       * count : 3
       * flags : 
       */
      'id' => 'MIE::Camera.MIE-Camera:ColorBalance',
      'desc' => [
        'en' => 'Color Balance',
        'fr' => 'Balance des couleurs',
      ],
    ],
  ];

}
