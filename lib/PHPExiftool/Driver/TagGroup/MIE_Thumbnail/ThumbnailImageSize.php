<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Thumbnail;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImageSize extends AbstractTagGroup
{

  protected string $id = 'MIE-Thumbnail:ThumbnailImageSize';

  protected string $name = 'ThumbnailImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Thumbnail Image Size',
    'fr' => 'Taille des miniatures',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Thumbnail
       * line : 164505
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Thumbnail.MIE-Thumbnail:ThumbnailImageSize',
      'desc' => [
        'en' => 'Thumbnail Image Size',
        'fr' => 'Taille des miniatures',
      ],
    ],
  ];

}
