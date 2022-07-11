<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SidecarForExtension extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:SidecarForExtension';

  protected string $name = 'SidecarForExtension';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sidecar For Extension',
    'fr' => 'Extension',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410668
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::photoshop.XMP-photoshop:SidecarForExtension',
      'desc' => [
        'en' => 'Sidecar For Extension',
        'fr' => 'Extension',
      ],
    ],
  ];

}
