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
class Revision extends AbstractTagGroup
{

  protected string $id = 'Red:Revision';

  protected string $name = 'Revision';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Revision',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331838
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:Revision',
      'desc' => [
        'en' => 'Revision',
      ],
    ],
  ];

}
