<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SuggestedPalette extends AbstractTagGroup
{

  protected string $id = 'PNG:SuggestedPalette';

  protected string $name = 'SuggestedPalette';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Suggested Palette',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::Main
       * line : 272944
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'PNG::Main.PNG:SuggestedPalette',
      'desc' => [
        'en' => 'Suggested Palette',
      ],
    ],
  ];

}
