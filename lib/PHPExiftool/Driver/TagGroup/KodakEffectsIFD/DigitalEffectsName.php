<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakEffectsIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalEffectsName extends AbstractTagGroup
{

  protected string $id = 'KodakEffectsIFD:DigitalEffectsName';

  protected string $name = 'DigitalEffectsName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Digital Effects Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::SpecialEffects
       * line : 158919
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Kodak::SpecialEffects.KodakEffectsIFD:DigitalEffectsName',
      'desc' => [
        'en' => 'Digital Effects Name',
      ],
    ],
  ];

}
