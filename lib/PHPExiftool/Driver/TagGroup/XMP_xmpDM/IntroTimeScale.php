<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IntroTimeScale extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:IntroTimeScale';

  protected string $name = 'IntroTimeScale';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Intro Time Scale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413441
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:IntroTimeScale',
      'desc' => [
        'en' => 'Intro Time Scale',
      ],
    ],
  ];

}
