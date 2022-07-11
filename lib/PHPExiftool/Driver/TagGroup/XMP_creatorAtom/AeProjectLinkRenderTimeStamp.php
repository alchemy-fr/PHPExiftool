<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_creatorAtom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AeProjectLinkRenderTimeStamp extends AbstractTagGroup
{

  protected string $id = 'XMP-creatorAtom:AeProjectLinkRenderTimeStamp';

  protected string $name = 'AeProjectLinkRenderTimeStamp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Ae Project Link Render Time Stamp',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::creatorAtom
       * line : 401811
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::creatorAtom.XMP-creatorAtom:AeProjectLinkRenderTimeStamp',
      'desc' => [
        'en' => 'Ae Project Link Render Time Stamp',
      ],
    ],
  ];

}
