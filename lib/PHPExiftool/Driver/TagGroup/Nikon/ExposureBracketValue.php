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
class ExposureBracketValue extends AbstractTagGroup
{

  protected string $id = 'Nikon:ExposureBracketValue';

  protected string $name = 'ExposureBracketValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Bracket Value',
    'fr' => 'Valeur Bracketing Expo',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197166
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:ExposureBracketValue',
      'desc' => [
        'en' => 'Exposure Bracket Value',
        'fr' => 'Valeur Bracketing Expo',
      ],
    ],
  ];

}
