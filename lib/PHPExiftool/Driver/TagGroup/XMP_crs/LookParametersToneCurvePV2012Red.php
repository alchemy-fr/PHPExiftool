<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LookParametersToneCurvePV2012Red extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:LookParametersToneCurvePV2012Red';

  protected string $name = 'LookParametersToneCurvePV2012Red';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Look Parameters Tone Curve PV2012 Red',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403251
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::crs.XMP-crs:LookParametersToneCurvePV2012Red',
      'desc' => [
        'en' => 'Look Parameters Tone Curve PV2012 Red',
      ],
    ],
  ];

}
