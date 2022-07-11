<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLengthIn35mmFormat extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:FocalLengthIn35mmFormat';

  protected string $name = 'FocalLengthIn35mmFormat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focal Length In 35mm Format',
    'fr' => 'Distance focale sur film 35 mm',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::Properties
       * line : 340321
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::Properties.SigmaRaw:FocalLengthIn35mmFormat',
      'desc' => [
        'en' => 'Focal Length In 35mm Format',
        'fr' => 'Distance focale sur film 35 mm',
      ],
    ],
  ];

}
