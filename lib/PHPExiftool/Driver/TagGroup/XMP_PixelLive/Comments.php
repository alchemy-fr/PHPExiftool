<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_PixelLive;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comments extends AbstractTagGroup
{

  protected string $id = 'XMP-PixelLive:Comments';

  protected string $name = 'Comments';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Comments',
    'fr' => 'Commentaires',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::PixelLive
       * line : 397803
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::PixelLive.XMP-PixelLive:Comments',
      'desc' => [
        'en' => 'Comments',
        'fr' => 'Commentaires',
      ],
    ],
  ];

}
