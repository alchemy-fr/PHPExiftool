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
class Brightness extends AbstractTagGroup
{

  protected string $id = 'MIE-Camera:Brightness';

  protected string $name = 'Brightness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Brightness',
    'fr' => 'Luminosité',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Camera
       * line : 163139
       * type : int8s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Camera.MIE-Camera:Brightness',
      'desc' => [
        'en' => 'Brightness',
        'fr' => 'Luminosité',
      ],
    ],
  ];

}
