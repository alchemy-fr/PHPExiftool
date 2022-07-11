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
class IntentDescriptor extends AbstractTagGroup
{

  protected string $id = 'MXF:IntentDescriptor';

  protected string $name = 'IntentDescriptor';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Intent Descriptor',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170541
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntentDescriptor',
      'desc' => [
        'en' => 'Intent Descriptor',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170544
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntentDescriptor',
      'desc' => [
        'en' => 'Intent Descriptor',
      ],
    ],
  ];

}
