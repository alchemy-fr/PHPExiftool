<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IntellectualPropertyLicenseRegionName extends AbstractTagGroup
{

  protected string $id = 'MXF:IntellectualPropertyLicenseRegionName';

  protected string $name = 'IntellectualPropertyLicenseRegionName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Intellectual Property License Region Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170823
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntellectualPropertyLicenseRegionName',
      'desc' => [
        'en' => 'Intellectual Property License Region Name',
      ],
    ],
  ];

}
