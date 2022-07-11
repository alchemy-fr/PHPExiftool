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
class LookParametersToneCurvePV2012Red extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:LookParametersToneCurvePV2012Red';

  protected string $name = 'LookParametersToneCurvePV2012Red';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Look Parameters Tone Curve PV2012 Red',
  ];

  protected int $count = 0;

  protected int $flags = 577;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399932
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List,Seq
       */
      'id' => 'XMP::crd.XMP-crd:LookParametersToneCurvePV2012Red',
      'desc' => [
        'en' => 'Look Parameters Tone Curve PV2012 Red',
      ],
    ],
  ];

}
