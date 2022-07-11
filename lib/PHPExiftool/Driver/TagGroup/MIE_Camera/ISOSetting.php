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
class ISOSetting extends AbstractTagGroup
{

  protected string $id = 'MIE-Camera:ISOSetting';

  protected string $name = 'ISOSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Setting',
    'fr' => 'Réglage ISO',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Camera
       * line : 163320
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Camera.MIE-Camera:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
  ];

}
