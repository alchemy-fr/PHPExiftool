<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpRights;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UsageTerms extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpRights:UsageTerms';

  protected string $name = 'UsageTerms';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Usage Terms',
    'fr' => 'Conditions d\'Utilisation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpRights
       * line : 414722
       * type : lang-alt
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpRights.XMP-xmpRights:UsageTerms',
      'desc' => [
        'en' => 'Usage Terms',
        'fr' => 'Conditions d\'Utilisation',
      ],
    ],
  ];

}
