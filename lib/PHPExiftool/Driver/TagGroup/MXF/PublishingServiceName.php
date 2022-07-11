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
class PublishingServiceName extends AbstractTagGroup
{

  protected string $id = 'MXF:PublishingServiceName';

  protected string $name = 'PublishingServiceName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Publishing Service Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171021
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PublishingServiceName',
      'desc' => [
        'en' => 'Publishing Service Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171024
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PublishingServiceName',
      'desc' => [
        'en' => 'Publishing Service Name',
      ],
    ],
  ];

}
