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
class OtherCodecDescription extends AbstractTagGroup
{

  protected string $id = 'ASF:OtherCodecDescription';

  protected string $name = 'OtherCodecDescription';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Other Codec Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::CodecList
       * line : 876
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::CodecList.ASF:OtherCodecDescription',
      'desc' => [
        'en' => 'Other Codec Description',
      ],
    ],
  ];

}
