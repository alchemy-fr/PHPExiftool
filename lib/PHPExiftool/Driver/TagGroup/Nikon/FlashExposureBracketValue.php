<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureBracketValue extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashExposureBracketValue';

  protected string $name = 'FlashExposureBracketValue';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Bracket Value',
    'fr' => 'Valeur Bracketing Flash',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197157
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:FlashExposureBracketValue',
      'desc' => [
        'en' => 'Flash Exposure Bracket Value',
        'fr' => 'Valeur Bracketing Flash',
      ],
    ],
  ];

}
