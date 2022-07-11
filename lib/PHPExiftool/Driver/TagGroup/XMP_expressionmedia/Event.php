<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_expressionmedia;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Event extends AbstractTagGroup
{

  protected string $id = 'XMP-expressionmedia:Event';

  protected string $name = 'Event';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Event',
    'fr' => 'Evenement',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::ExpressionMedia
       * line : 397173
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::ExpressionMedia.XMP-expressionmedia:Event',
      'desc' => [
        'en' => 'Event',
        'fr' => 'Evenement',
      ],
    ],
  ];

}
