<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'UserData:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Model Name',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325506
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325553
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325749
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    3 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325904
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    4 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326274
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    5 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326292
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
