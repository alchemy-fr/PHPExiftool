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
class DiffractionCorrectionOn extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DiffractionCorrectionOn';

  protected string $name = 'DiffractionCorrectionOn';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Diffraction Correction On',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80732
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:DiffractionCorrectionOn',
      'desc' => [
        'en' => 'Diffraction Correction On',
      ],
    ],
  ];

}
