<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XMP extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:XMP';

  protected string $name = 'XMP';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XMP',
    'fr' => 'Métadonnées XMP',
  ];

  protected int $count = 0;

  protected int $flags = 18;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Main
       * line : 82087
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'CanonVRD::Main.CanonVRD:XMP',
      'desc' => [
        'en' => 'XMP',
        'fr' => 'Métadonnées XMP',
      ],
    ],
  ];

}
