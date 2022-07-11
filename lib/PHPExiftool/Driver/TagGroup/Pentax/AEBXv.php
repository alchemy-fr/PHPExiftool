<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEBXv extends AbstractTagGroup
{

  protected string $id = 'Pentax:AEBXv';

  protected string $name = 'AEBXv';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AEB Xv',
    'fr' => 'Compensation d\'expo. auto en bracketing',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283040
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AEBXv',
      'desc' => [
        'en' => 'AEB Xv',
        'fr' => 'Compensation d\'expo. auto en bracketing',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AEInfo2
       * line : 283398
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo2.Pentax:AEBXv',
      'desc' => [
        'en' => 'AEB Xv',
        'fr' => 'Compensation d\'expo. auto en bracketing',
      ],
    ],
  ];

}
