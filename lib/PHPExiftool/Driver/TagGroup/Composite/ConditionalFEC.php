<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ConditionalFEC extends AbstractTagGroup
{

  protected string $id = 'Composite:ConditionalFEC';

  protected string $name = 'ConditionalFEC';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flash Exposure Compensation',
    'fr' => 'Compensation exposition flash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90043
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:ConditionalFEC',
      'desc' => [
        'en' => 'Flash Exposure Compensation',
        'fr' => 'Compensation exposition flash',
      ],
    ],
  ];

}
