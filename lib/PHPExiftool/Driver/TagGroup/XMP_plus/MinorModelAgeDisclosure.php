<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinorModelAgeDisclosure extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:MinorModelAgeDisclosure';

  protected string $name = 'MinorModelAgeDisclosure';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Minor Model Age Disclosure',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 272541
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PLUS::XMP.XMP-plus:MinorModelAgeDisclosure',
      'desc' => [
        'en' => 'Minor Model Age Disclosure',
      ],
    ],
  ];

}
