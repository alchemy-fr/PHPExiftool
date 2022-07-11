<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'H264:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Model Name',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::MDPM
       * line : 142290
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
