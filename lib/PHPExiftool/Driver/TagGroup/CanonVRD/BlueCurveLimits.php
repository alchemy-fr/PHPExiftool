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
class BlueCurveLimits extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:BlueCurveLimits';

  protected string $name = 'BlueCurveLimits';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Blue Curve Limits',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82473
       * type : int16u
       * writable : true
       * count : 4
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:BlueCurveLimits',
      'desc' => [
        'en' => 'Blue Curve Limits',
      ],
    ],
  ];

}
