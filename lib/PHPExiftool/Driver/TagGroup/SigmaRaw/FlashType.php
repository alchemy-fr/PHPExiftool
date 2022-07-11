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
class FlashType extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:FlashType';

  protected string $name = 'FlashType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flash Type',
    'fr' => 'Type de flash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::Properties
       * line : 340292
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::Properties.SigmaRaw:FlashType',
      'desc' => [
        'en' => 'Flash Type',
        'fr' => 'Type de flash',
      ],
    ],
  ];

}
