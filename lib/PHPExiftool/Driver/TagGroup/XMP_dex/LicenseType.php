<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dex;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LicenseType extends AbstractTagGroup
{

  protected string $id = 'XMP-dex:LicenseType';

  protected string $name = 'LicenseType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'License Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::dex
       * line : 405264
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::dex.XMP-dex:LicenseType',
      'desc' => [
        'en' => 'License Type',
      ],
    ],
  ];

}
