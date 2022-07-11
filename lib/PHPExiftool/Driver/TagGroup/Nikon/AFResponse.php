<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFResponse extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFResponse';

  protected string $name = 'AFResponse';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Response',
    'fr' => 'Réponse AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199798
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:AFResponse',
      'desc' => [
        'en' => 'AF Response',
        'fr' => 'Réponse AF',
      ],
    ],
  ];

}
