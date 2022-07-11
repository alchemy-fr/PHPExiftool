<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RedcodeVersion extends AbstractTagGroup
{

  protected string $id = 'Red:RedcodeVersion';

  protected string $name = 'RedcodeVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Redcode Version',
  ];

  protected int $count = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::RED1
       * line : 332008
       * type : string
       * writable : false
       * count : 1
       * flags : 
       */
      'id' => 'Red::RED1.Red:RedcodeVersion',
      'desc' => [
        'en' => 'Redcode Version',
      ],
    ],
    1 => [
      /**
       * table_name : Red::RED2
       * line : 332076
       * type : string
       * writable : false
       * count : 1
       * flags : 
       */
      'id' => 'Red::RED2.Red:RedcodeVersion',
      'desc' => [
        'en' => 'Redcode Version',
      ],
    ],
  ];

}
