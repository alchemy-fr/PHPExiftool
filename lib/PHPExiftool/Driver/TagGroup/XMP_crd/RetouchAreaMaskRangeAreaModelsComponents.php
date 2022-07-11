<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchAreaMaskRangeAreaModelsComponents extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:RetouchAreaMaskRangeAreaModelsComponents';

  protected string $name = 'RetouchAreaMaskRangeAreaModelsComponents';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Range Area Models Components',
  ];

  protected int $count = 0;

  protected int $flags = 577;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 401024
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List,Seq
       */
      'id' => 'XMP::crd.XMP-crd:RetouchAreaMaskRangeAreaModelsComponents',
      'desc' => [
        'en' => 'Retouch Area Mask Range Area Models Components',
      ],
    ],
  ];

}
