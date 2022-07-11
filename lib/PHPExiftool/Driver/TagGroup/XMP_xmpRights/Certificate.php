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
class Certificate extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpRights:Certificate';

  protected string $name = 'Certificate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Certificate',
    'fr' => 'Certificat',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpRights
       * line : 414704
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpRights.XMP-xmpRights:Certificate',
      'desc' => [
        'en' => 'Certificate',
        'fr' => 'Certificat',
      ],
    ],
  ];

}
