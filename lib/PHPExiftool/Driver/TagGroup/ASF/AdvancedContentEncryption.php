<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdvancedContentEncryption extends AbstractTagGroup
{

  protected string $id = 'ASF:AdvancedContentEncryption';

  protected string $name = 'AdvancedContentEncryption';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Advanced Content Encryption',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::HeaderExtension
       * line : 1827
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::HeaderExtension.ASF:AdvancedContentEncryption',
      'desc' => [
        'en' => 'Advanced Content Encryption',
      ],
    ],
  ];

}
