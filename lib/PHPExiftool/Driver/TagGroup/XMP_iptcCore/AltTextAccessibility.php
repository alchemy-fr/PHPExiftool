<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AltTextAccessibility extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcCore:AltTextAccessibility';

  protected string $name = 'AltTextAccessibility';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Alt Text Accessibility',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcCore
       * line : 409254
       * type : lang-alt
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::iptcCore.XMP-iptcCore:AltTextAccessibility',
      'desc' => [
        'en' => 'Alt Text Accessibility',
      ],
    ],
  ];

}
