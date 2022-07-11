<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MonochromeToningEffect extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:MonochromeToningEffect';

  protected string $name = 'MonochromeToningEffect';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Monochrome Toning Effect',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80494
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:MonochromeToningEffect',
      'desc' => [
        'en' => 'Monochrome Toning Effect',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 82987
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:MonochromeToningEffect',
      'desc' => [
        'en' => 'Monochrome Toning Effect',
      ],
    ],
  ];

}
