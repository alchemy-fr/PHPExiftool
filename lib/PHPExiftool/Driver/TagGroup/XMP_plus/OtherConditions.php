<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherConditions extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:OtherConditions';

  protected string $name = 'OtherConditions';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Other Conditions',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 272628
       * type : lang-alt
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PLUS::XMP.XMP-plus:OtherConditions',
      'desc' => [
        'en' => 'Other Conditions',
      ],
    ],
  ];

}
