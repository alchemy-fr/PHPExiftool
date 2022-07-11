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
class ColorTemperature extends AbstractTagGroup
{

  protected string $id = 'MIE-Camera:ColorTemperature';

  protected string $name = 'ColorTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temperature',
    'fr' => 'Température de couleur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Camera
       * line : 163168
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Camera.MIE-Camera:ColorTemperature',
      'desc' => [
        'en' => 'Color Temperature',
        'fr' => 'Température de couleur',
      ],
    ],
  ];

}
