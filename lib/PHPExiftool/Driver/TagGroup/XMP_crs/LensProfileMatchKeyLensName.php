<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensProfileMatchKeyLensName extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:LensProfileMatchKeyLensName';

  protected string $name = 'LensProfileMatchKeyLensName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Profile Match Key Lens Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403191
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:LensProfileMatchKeyLensName',
      'desc' => [
        'en' => 'Lens Profile Match Key Lens Name',
      ],
    ],
  ];

}
