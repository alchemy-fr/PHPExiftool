<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Video;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelatedVideoFileName extends AbstractTagGroup
{

  protected string $id = 'MIE-Video:RelatedVideoFileName';

  protected string $name = 'RelatedVideoFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Related Video File Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Video
       * line : 164563
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Video.MIE-Video:RelatedVideoFileName',
      'desc' => [
        'en' => 'Related Video File Name',
      ],
    ],
  ];

}
