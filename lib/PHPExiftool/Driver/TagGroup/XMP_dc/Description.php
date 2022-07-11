<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Description extends AbstractTagGroup
{

  protected string $id = 'XMP-dc:Description';

  protected string $name = 'Description';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::dc
       * line : 405147
       * type : lang-alt
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::dc.XMP-dc:Description',
      'desc' => [
        'en' => 'Description',
      ],
    ],
  ];

}
