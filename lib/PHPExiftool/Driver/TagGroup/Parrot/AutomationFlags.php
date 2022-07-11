<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutomationFlags extends AbstractTagGroup
{

  protected string $id = 'Parrot:AutomationFlags';

  protected string $name = 'AutomationFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Automation Flags',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::Automation
       * line : 282290
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::Automation.Parrot:AutomationFlags',
      'desc' => [
        'en' => 'Automation Flags',
      ],
    ],
  ];

}
