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
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'MIE-Camera:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Serial Number',
    'fr' => 'Numéro de série',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Camera
       * line : 163440
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Camera.MIE-Camera:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
  ];

}
