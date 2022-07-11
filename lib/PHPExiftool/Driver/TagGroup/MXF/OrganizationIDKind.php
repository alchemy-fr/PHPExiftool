<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OrganizationIDKind extends AbstractTagGroup
{

  protected string $id = 'MXF:OrganizationIDKind';

  protected string $name = 'OrganizationIDKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Organization ID Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170899
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OrganizationIDKind',
      'desc' => [
        'en' => 'Organization ID Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170902
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OrganizationIDKind',
      'desc' => [
        'en' => 'Organization ID Kind',
      ],
    ],
  ];

}
