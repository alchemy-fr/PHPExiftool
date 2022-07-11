<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Preview;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageType extends AbstractTagGroup
{

  protected string $id = 'MIE-Preview:PreviewImageType';

  protected string $name = 'PreviewImageType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Preview
       * line : 164457
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Preview.MIE-Preview:PreviewImageType',
      'desc' => [
        'en' => 'Preview Image Type',
      ],
    ],
  ];

}
