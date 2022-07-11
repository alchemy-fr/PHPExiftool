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
class ToneCurveProperty extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ToneCurveProperty';

  protected string $name = 'ToneCurveProperty';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tone Curve Property',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82338
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:ToneCurveProperty',
      'desc' => [
        'en' => 'Tone Curve Property',
      ],
    ],
  ];

}
