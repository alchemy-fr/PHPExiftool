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
class TerminationAction extends AbstractTagGroup
{

  protected string $id = 'MNG:TerminationAction';

  protected string $name = 'TerminationAction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Termination Action',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::TerminationAction
       * line : 165738
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::TerminationAction.MNG:TerminationAction',
      'desc' => [
        'en' => 'Termination Action',
      ],
    ],
  ];

}
