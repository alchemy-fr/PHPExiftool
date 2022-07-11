<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WideConvergenceAngleRange extends AbstractTagGroup
{

  protected string $id = 'File:WideConvergenceAngleRange';

  protected string $name = 'WideConvergenceAngleRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Wide Convergence Angle Range',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::FEI12
       * line : 166886
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::FEI12.File:WideConvergenceAngleRange',
      'desc' => [
        'en' => 'Wide Convergence Angle Range',
      ],
    ],
  ];

}
