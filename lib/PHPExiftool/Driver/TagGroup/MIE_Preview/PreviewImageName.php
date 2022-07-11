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
class PreviewImageName extends AbstractTagGroup
{

  protected string $id = 'MIE-Preview:PreviewImageName';

  protected string $name = 'PreviewImageName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Preview
       * line : 164462
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Preview.MIE-Preview:PreviewImageName',
      'desc' => [
        'en' => 'Preview Image Name',
      ],
    ],
  ];

}
