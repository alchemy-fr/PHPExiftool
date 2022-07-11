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
class UnknownContrast extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:UnknownContrast';

  protected string $name = 'UnknownContrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Contrast',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83069
       * type : int16s
       * writable : true
       * count : 
       * flags : Unknown
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:UnknownContrast',
      'desc' => [
        'en' => 'Unknown Contrast',
      ],
    ],
  ];

}
