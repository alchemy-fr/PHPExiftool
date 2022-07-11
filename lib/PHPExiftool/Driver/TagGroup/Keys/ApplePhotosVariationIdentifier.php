<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Keys;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplePhotosVariationIdentifier extends AbstractTagGroup
{

  protected string $id = 'Keys:ApplePhotosVariationIdentifier';

  protected string $name = 'ApplePhotosVariationIdentifier';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Apple Photos Variation Identifier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Keys
       * line : 323612
       * type : int64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Keys.Keys:ApplePhotosVariationIdentifier',
      'desc' => [
        'en' => 'Apple Photos Variation Identifier',
      ],
    ],
  ];

}
