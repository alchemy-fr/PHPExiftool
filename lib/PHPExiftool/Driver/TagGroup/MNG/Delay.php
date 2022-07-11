<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Delay extends AbstractTagGroup
{

  protected string $id = 'MNG:Delay';

  protected string $name = 'Delay';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Delay',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::TerminationAction
       * line : 165769
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::TerminationAction.MNG:Delay',
      'desc' => [
        'en' => 'Delay',
      ],
    ],
  ];

}
