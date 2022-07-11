<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCard;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sound extends AbstractTagGroup
{

  protected string $id = 'VCard:Sound';

  protected string $name = 'Sound';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sound',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : VCard::Main
       * line : 395540
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'VCard::Main.VCard:Sound',
      'desc' => [
        'en' => 'Sound',
      ],
    ],
  ];

}
