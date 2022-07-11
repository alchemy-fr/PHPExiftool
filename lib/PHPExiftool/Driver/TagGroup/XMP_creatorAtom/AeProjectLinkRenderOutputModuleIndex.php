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
class AeProjectLinkRenderOutputModuleIndex extends AbstractTagGroup
{

  protected string $id = 'XMP-creatorAtom:AeProjectLinkRenderOutputModuleIndex';

  protected string $name = 'AeProjectLinkRenderOutputModuleIndex';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Ae Project Link Render Output Module Index',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::creatorAtom
       * line : 401805
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::creatorAtom.XMP-creatorAtom:AeProjectLinkRenderOutputModuleIndex',
      'desc' => [
        'en' => 'Ae Project Link Render Output Module Index',
      ],
    ],
  ];

}
