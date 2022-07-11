<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurve extends AbstractTagGroup
{

  protected string $id = 'Pentax:ToneCurve';

  protected string $name = 'ToneCurve';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tone Curve',
    'fr' => 'Courbe de ton',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301264
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ToneCurve',
      'desc' => [
        'en' => 'Tone Curve',
        'fr' => 'Courbe de ton',
      ],
    ],
  ];

}
