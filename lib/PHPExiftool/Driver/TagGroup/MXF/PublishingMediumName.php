<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PublishingMediumName extends AbstractTagGroup
{

  protected string $id = 'MXF:PublishingMediumName';

  protected string $name = 'PublishingMediumName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Publishing Medium Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171027
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PublishingMediumName',
      'desc' => [
        'en' => 'Publishing Medium Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171030
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PublishingMediumName',
      'desc' => [
        'en' => 'Publishing Medium Name',
      ],
    ],
  ];

}
