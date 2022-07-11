<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DRM_LASignatureLicSrvCert extends AbstractTagGroup
{

  protected string $id = 'ASF:DRM_LASignatureLicSrvCert';

  protected string $name = 'DRM_LASignatureLicSrvCert';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'DRM LA Signature Lic Srv Cert',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::ExtendedDescr
       * line : 1211
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ExtendedDescr.ASF:DRM_LASignatureLicSrvCert',
      'desc' => [
        'en' => 'DRM LA Signature Lic Srv Cert',
      ],
    ],
  ];

}
